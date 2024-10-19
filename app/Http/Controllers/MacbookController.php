<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Macbook;

class MacbookController extends Controller
{
    public function index() {
        $macbooks = Macbook::get();

        return view('macbook', compact('macbooks'));
    }
}
