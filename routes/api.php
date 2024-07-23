<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicienConteroller;
Route::get('search/{name}',[MedicienConteroller::class,'Search'])->name('api.search');
Route::get('show',[MedicienConteroller::class,'show'])->name('api.show');
Route::get('show-description/{id}',[MedicienConteroller::class,'ShowDescription'])->name('api.showDescription');
// Route::get('/add-to-cart',[MedicienConteroller::class,'AddToCart'])->name('apiadd_to_cart');
Route::get('add-to-cart/{id}',[MedicienConteroller::class,'AddToCart'])->name('AddToCart');
Route::get('carts',[MedicienConteroller::class,'Carts'])->name('carts');
Route::get('add-to-favorite/{id}',[MedicienConteroller::class,'Favorite'])->name('favorite');
Route::get('favorite',[MedicienConteroller::class,'ShowFavorite'])->name('Showfavorite');

// require __DIR__.'/guest.php';
