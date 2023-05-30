<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
            'author' => 'nullable|string|max:150',
            'content' => 'string',
            'project_id' => 'integer|exists:projects,id'
        ]);

        return $request->all();
    }
}
