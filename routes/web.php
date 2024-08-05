<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cat;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cats', function () {
    return Cat::all();
});
