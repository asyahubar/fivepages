<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutus');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/cats', function () {
    $cats = \App\Cat::all();
    foreach ($cats as $cat) {
        echo $cat->name . "<br>";
    };

    echo "<br>";
    echo "<br>";

    $cat17 = \App\Cat::create(['name' => 'Bob', 'age' => 4, 'gender' => 'female']);


//    return view('cats');
})->name('cats');
