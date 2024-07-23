<?php

use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\StorehouseController;
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
    return redirect()->route('medicien.show');
});

    Route::get('/show',[DescriptionController::class,'Show'])->name('medicien.show');
    Route::get('/show_description/{id}',[DescriptionController::class,'ShowDescription'])->name('medicien.showDescrpition');
    Route::get('/create',[DescriptionController::class,'create'])->name('medicien.create')->middleware('auth');
    Route::post('/add',[DescriptionController::class,'Add'])->name('medicien.add');
    Route::get('/edit/{id}',[DescriptionController::class,'Edit'])->name('medicien.edit');
    Route::post('/update/{id}',[DescriptionController::class,'Update'])->name('medicien.update');
    Route::delete('/delete/{id}',[DescriptionController::class,'Destroy'])->name('medicien.delete');
    Route::get('/search',[DescriptionController::class,'Search'])->name('medicien.search');
    Route::get('/cart',[DescriptionController::class,'Cart'])->name('medicien.Cart');
    Route::get('/order/{id}',[DescriptionController::class,'Order'])->name('medicien.Order');
    Route::get('/editorders/{id}',[DescriptionController::class,'EditOrders'])->name('medicien.Editorders');
    Route::post('/editorder/{id}',[DescriptionController::class,'EditOrder'])->name('medicien.Editorder');
 //   Route::get('/soft/delete/{id}',[DescriptionController::class,'softDelete'])->name('medicien.softDelete');

require __DIR__ . '/auth.php';
