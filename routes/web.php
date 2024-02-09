<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return 'a';
});

Route::middleware(['web','json.response'])->group(function() {
    Route::get('/avatars/{name}', function($name) {
        $path = "avatars/$name";
        return \Illuminate\Support\Facades\Storage::disk('local')->response($path);
    });
});
