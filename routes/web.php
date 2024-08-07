<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class,'index'])->name('home.index');

//product detail Page
Route::get('/product/{id}',[HomeController::class, 'show'])->name('product.show');


use App\Http\Controllers\InvoiceController;

Route::get('/invoice/{id}', [InvoiceController::class, 'generateInvoicePdf']);
Route::get('/invoice/generate-pdf/{id}', [InvoiceController::class, 'generateInvoicePdf'])->name('invoice.generate-pdf');
Route::get('/invoice/download-pdf/{id}', [InvoiceController::class, 'downloadInvoicePdf'])->name('invoice.download-pdf');
Route::get('/invoice/stream-pdf/{id}', [InvoiceController::class, 'streamInvoicePdf'])->name('invoice.stream-pdf');
Route::get('/invoice/send-email/{id}', [InvoiceController::class, 'sendInvoiceEmail'])->name('invoice.send-email');

use App\Http\Controllers\BarcodeGenerator;
Route::get('/generate-barcode/{productid}', [BarcodeController::class, 'generateAndSaverProductBarCode'])->name('generate.barcode');

Route::get('/generate-qrcode/{productid}', [BarcodeController::class, 'generateAndSaverProductBarCode'])->name('generate.qrcode');

use App\Http\Controllers\AuthController;
Route::get('/login',[AuthController::class,'login'])->name('home.login');


Route::get('/forgot_password',[AuthController::class,'forgot_password'])->name('home.forgot_password');


Route::get('/register',[AuthController::class,'register'])->name('home.register');