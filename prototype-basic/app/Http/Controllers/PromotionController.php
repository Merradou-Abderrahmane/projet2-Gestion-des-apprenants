<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    //
    public function index()
    {
        $promotions = Promotion::all();
        return view('index', compact('promotions'));
    }
    
}
