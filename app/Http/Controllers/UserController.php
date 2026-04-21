<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('customer.index');
    }

    public function detailProduct(){
        return view('customer.detail');
    }

    public function manageProduct(){
        return view('customer.manage');
    }

    public function cartProduct(){
        return view('customer.cart');
    }
}
