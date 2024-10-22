<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="product-details">
        <h1>{{ $product->name }}</h1>
        <p><strong>Описание:</strong> {{ $product->detail }}</p>
        <p><strong>Дата создания:</strong> {{ $product->created_at }}</p>
        <p><strong>Дата обновления:</strong> {{ $product->updated_at }}</p>
    </div>
</body>
</html>
