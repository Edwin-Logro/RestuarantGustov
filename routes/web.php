<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
Route::resource('menu','MenuController');
Route::resource('invoice','InvoiceController');
Route::resource('receipt','ReceiptController');
Route::resource('report','ReportController');
Route::resource('saleCurrent','SaleCurrentController');

// Route::get('/saleCurrent',function(){
//     return view('saleCurrent',["name"=>"hola mundo"]);
// });

