<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OutletMapController extends Controller
{
    public function index(Request $request)
    {
        return view('outlets.map');
    }
}
