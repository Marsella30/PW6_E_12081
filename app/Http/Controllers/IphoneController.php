<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iphone;

class IphoneController extends Controller
{
    public function index() {
        $iphones = Iphone::get();

        return view('iphone', compact('iphones'));
    }
}
