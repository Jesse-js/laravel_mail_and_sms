<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('post', ['id' => $id]);
    }

    
}
