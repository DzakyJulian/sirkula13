<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/modules/bank-sampah.php';

Route::get('/', function () {
    return view('welcome');
});
