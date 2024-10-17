<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $comment = Comment::create([
            'post_id' => $postId,
            'comment_text' => $request->input('comment_text')
        ]);
        return response()->json($comment);
    }

    public function index($postId)
    {
        $comments = Comment::where('post_id', $postId)->get();
        return response()->json($comments);
    }

    public function update(Request $request, $commentId)
    {
        $comment = Comment::find($commentId);
        $comment->update([
            'comment_text' => $request->input('comment_text')
        ]);
        return response()->json($comment);
    }

    public function destroy($commentId)
    {
        Comment::destroy($commentId);
        return response()->json(['message' => 'Комментарий удален']);
    }
}

