<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $title = 'Book';
        $description = 'Testing';
        $button = '<a class="btn btn-lg btn-secondary" href="/">Back to Landing Page</a>';
        return view('book', compact('title', 'description', 'button'));
    }
}
