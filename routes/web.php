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
    return view('welcome');
});

Route::get("/about-me", function () {
    return "Nama Saya <b>Novitasari</b>";
});

Route::get("/Hobi", function () {
    return "Nonton Drama";
});

Route::get("/Makanan", function () {
    return "Suka semua makanan yang enak";
});

Route::get("/status", function () {
    return "Mahasiswi";
});

Route::get("/Universitas", function () {
    return "Muhammadiyah Kalimantan Timur";
});

Route::get("/semester", function () {
    return "Semester 5";
});

use App\Http\Controllers\novitasariController;

Route::get("/novitasari/one", [novitasariController::class, "one"]);
Route::get("/novitasari/two", [novitasariController::class, "two"]);
Route::get("/novitasari/three", [novitasariController::class, "three"]);


use App\Http\Controllers\sariiiController;

Route::get("/sariii/satu", [sariiiController::class, "satu"]);
Route::get("/sariii/dua", [sariiiController::class, "dua"]);
Route::get("/sariii/tiga", [sariiiController::class, "tiga"]);

Route::get("/test-tema", [novitasariController::class, "index"]);



