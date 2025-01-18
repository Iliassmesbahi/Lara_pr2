<?php

use App\Http\Controllers\AjouterController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home.index');
// Route::get('/edit/{edit}',[EditController::class,'edit'])->name('edit');
Route::get('/ajouter',[AjouterController::class,'ajout'])->name('ajouter');
Route::post('/', [AjouterController::class,'store'])->name('store');
Route::delete('/{view}', [HomeController::class,'delet'])->name('delete');
Route::get('/view/{view}',[ViewController::class,'view'])->name('view');
// Route::put('/update/{view}',[EditController::class,'updat'])->name('update');

Route::get('/edit/{post}', [EditController::class, 'edit'])->name('edit.post');
Route::put('/update/{id}', [EditController::class, 'updat'])->name('update.post');