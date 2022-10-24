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

    public function create()
    {
        return view('addPromotion');
    }

    public function store(Request $request)
    {
        $promotion = new Promotion();
        $promotion->promotionName = $request->promotionName;
        $promotion->save();
        // return redirect('/');
        return redirect('index');
    }

}
