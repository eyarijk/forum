<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Forum;

class CommentController extends Controller
{
    public function createComment(Request $request,Forum $forum)
    {
      $this->validate($request,[
        'easy_comment' => 'required|min:15|max:500'
      ]);
      $comment = New Comment;
      $comment->easy_comment = $request->easy_comment;
      $comment->user_id = auth()->user()->id;

      $forum->comments()->save($comment);

      return back()->withMessage('Good! You add comment!');
    }
}
