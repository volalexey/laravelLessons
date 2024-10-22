<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class ProductController extends BaseController
{
    public function showAll(): array|string
    {
        $products = Product::all();
        return view('products.readProducts', compact('products'));
    }
    public function deleteById(int $id){
        $response = $this->send_response(["id" => $id], 'Product deleted successfully.');
        Product::where($id)->delete();
        return $response;
    }
    public function showById($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.readProducts')->with('error', 'Продукт не найден.');
        }

        return view('products.showProduct', compact('product'));
    }
    public function addProductGet(){
        return view('products.addProduct');
    }
    public function addProduct(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required',
        ]);

        if($validator->fails()){
            return $this->send_error('Validation Error', $validator->errors());
        }

        $product = new Product($input);
        $product->save();
        return $this->send_response($product, 'Product created successfully.');
    }
    public function updateProduct(Request $request, $id){
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required',
        ]);

        if($validator->fails()){
            return $this->send_error('Validation Error', $validator->errors());
        }

        $product = Product::find($id);
        $response = Gate::inspect('update', $product);

        if ($response->allowed()) {
            Product::whereId($id)->update($request->all());
            return $this->send_response(Product::find($id)->toArray(), 'Product updated successfully.');
        } else {
            return $this->send_error('Product Policy Error', $validator->errors());
        }
    }
}
