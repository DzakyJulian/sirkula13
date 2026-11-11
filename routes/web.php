
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Marketplace\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');
