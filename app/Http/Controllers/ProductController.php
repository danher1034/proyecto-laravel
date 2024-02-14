<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::simplePaginate(9);
        return view('products.index', compact('products'));
    }
}
