<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.product.index');
    }
}
