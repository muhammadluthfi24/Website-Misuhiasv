<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function apply(Request $request)
    {
        $code = strtoupper(trim($request->code));

        // Kode diskon
        $discounts = [
            'KAOSHEMAT' => 10,
            'SINGAPERBANGSA' => 15,
            'PROMOAWAL' => 20,
        ];

        // Jika kode salah
        if (!isset($discounts[$code])) {
            return back()->with('discount_error', 'Kode promo tidak valid ❌');
        }

        // Simpan ke session
        session([
            'discount_percent' => $discounts[$code],
            'discount_code' => $code
        ]);

        return back()->with('discount_success', 'Kode berhasil diterapkan! Diskon ' . $discounts[$code] . '% aktif 🎉');
    }
}
