<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function generateAndSaverProductBarCode($productId)
    {
        $product = Product::findOrfail($productId);
        $barcodePath = $product->generateAndSaverProductBarCode();

        return view ('barcode', compact('barcodePath'));
    }
    public function generateAndSaverProductQRCode($bankId)
    {
        $bank = BankDetail::findOrFail($productid);
        $qrcodepath = $bank->generateAndSaverProductQRCode();

        return view ('qrcode', compact('qrcodePath'));
    }
}
