<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinarmedController extends Controller
{
    public function about()
    {
        return view('about');
    }
}
