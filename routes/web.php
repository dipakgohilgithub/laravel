<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/product', function () {
//     return view('layout');
// });
// Route::get('/', [LoginController::class, 'login']);
// Route::get('/register', [LoginController::class, 'register'])->name('register');

// Route::post('register-save', [LoginController::class, 'register_submit'])->name('register_submit');

// Route::get('clear', function () {
//     Artisan::call('clear');
// });


    // how to down and up webistes start 

        // Route::get('down', function () {
        //     Artisan::call('down');
        // }); 

        // now remove or delete down file in storage/framworks/down.txt
    // how to down and up webistes end 


// Route::get('/down', function () {
//     Artisan::call('down',['--secret'=>'630542a-246b']);
//     return "Website Down successfully";
// });




Route::resource('products', ProductController::class);



