<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $current_date = date('Y-m-d');
        $trains = Train::all()->where('departure_date', '=', $current_date);
        return view('welcome', compact('trains'));
    }
}
