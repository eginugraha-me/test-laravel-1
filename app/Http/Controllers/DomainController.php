<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    public function index()
    {
        return view('pages.home');
    }
    public function checkDomain(Request $request)
    {
        $domain = trim($request->input('domain'));

        $isDomainAvailable = $this->isDomainAvailable($domain);

        if ($isDomainAvailable && $domain) {
            return redirect()->back()->with('success', 'Selamat domain anda tersedia')->with('domain', $domain);
        } else {
            return redirect()->back()->with('error', 'Domain tidak tersedia');
        }
    }

    private function isDomainAvailable($domain)
    {
        return !Domain::where('name', $domain)->exists();
    }
}
