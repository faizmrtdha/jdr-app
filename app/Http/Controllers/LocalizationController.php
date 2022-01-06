<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function switch($language = '')
    {
        // Simpan locale ke session.
        request()->session()->put('locale', $language);

        // Arahkan ke halaman sebelumnya.
        return redirect()->back();
    }
}
