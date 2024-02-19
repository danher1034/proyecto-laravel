<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index() //Muestra todos los productos con stock disponible
    {
        $products = Product::where('stock', 1)->simplePaginate(9);
        return view('products.index', compact('products'));
    }
}
