<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend/index');
    }
    public function fashion(){
        return view('frontend/fashion');
    }
    public function electronic(){
        return view('frontend/electronic');
    }
    public function jewellery(){
        return view('frontend/jewellery');
    }
}
