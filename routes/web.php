<?php

use App\Http\Controllers\BangCOCController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/edit', function () {
    return view('BangCOC.edit');
})->name('edit');


Route::get('/index', function () {
    return view('BangCOC.index');
})->name('index');

Route::get('/show1', function () {
    return view('BangCOC.show1');
})->name('show1');

Route::get('/show2', function () {
    return view('BangCOC.show2');
})->name('show2');

Route::get('/show3', function () {
    return view('BangCOC.show3');
})->name('show3');

Route::get('/show4', function () {
    return view('BangCOC.show4');
})->name('show4');



Route::get("/BangCOC", [BangCOCController::class, "index"])->name('BangCOC.index');
Route::get("/BangCOC/create",[BangCOCController::class, "create"])->name('BangCOC.create');
Route::post("BangCOC", [BangCOCController::class, "store"])->name('BangCOC.store');
Route::get('/BangCOC/{id}', [BangCOCController::class, "show"])->name('BangCOC.show');
Route::get("/BangCOC/{id}/edit", [BangCOCController::class, "edit"])->name('BangCOC.edit');
Route::patch("/BangCOC/{id}", [BangCOCController::class, "update"])->name('BangCOC.update');
Route::delete("/BangCOC/{id}", [BangCOCController::class, "destroy"])->name('BangCOC.destroy');

