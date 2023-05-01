<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
//Get Route For Display Homepage With Form
Route::get('/',[TodoController::class,'index'])->name('todo.home');
//Post Route For Handle The Form
Route::post('/',[TodoController::class,'store'])->name('todo.store');
//Get Route For Delete The Todo
Route::get('/todo/{id}/delete',[TodoController::class,'destroy'])->name('todo.delete');
//Get Route For Show To Update Form
Route::get('/todo/{id}/update',[TodoController::class,'show_update'])->name('todo.update');
//Post Route For Handle The Update Form
Route::post('/todo/{id}/update',[TodoController::class,'handle_update'])->name('todo.update.submit');
//Get Route For Show About Page
Route::get('/about',function(){
return view('about');
})->name('todo.about');