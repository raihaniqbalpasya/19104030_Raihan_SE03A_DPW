<?php
// **Bagian Praktikum**
// contoh sampel controller

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class sampleController extends Controller {
    public function index()
    {
        return view('sample');
    }
}
