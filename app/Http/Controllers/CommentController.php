<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function create(Request $request)
    {
        $request->merge([
            'user_id' => auth()->user()->id,
            'image_url' => 'noimage.jpg',
            'comment_date' => date('Y-m-d H:i:s'),
            'date' => date('Y-m-d H:i:s'),
        ]);
       
        Comment::create($request->all());
        return redirect()->back();
    }
}
