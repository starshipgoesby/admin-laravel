<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category() {
        return view('Category');
    }

    public function addCategory() {
        return view('AddCategory');
    }

    
}
