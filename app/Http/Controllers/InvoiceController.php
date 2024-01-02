<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'price' => ['required', 'numeric', 'min:0'],
            'name' => ['required', ],
            'email' => ['required', 'email'],
        ]);

        $transaction = Transaction::create([
            'description' => "Pembelian domain " . $request->domain,
            'price' => $request->price,
            'buyer_name' => $request->name,
            'buyer_email' => $request->email,
            'status' => 'unpaid',
            'no' => 1
        ]);

        return view('pages.transaction')->with('transaction', $transaction);
    }
}
