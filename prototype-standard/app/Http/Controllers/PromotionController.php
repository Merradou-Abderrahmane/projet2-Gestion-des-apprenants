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
        return view('index', ['promotions' => $promotions]);
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

    public function edit($id)
    {
        $promotion = Promotion::find($id);
        // return Promotion::find($id);
                                     #compact('promotion')
        return view('editPromotion', ['promotion' => $promotion] );
    }

    public function update(Request $request, $id)
    {
        $promotion = Promotion::find($id);
        $promotion->promotionName = $request->input('promotionName');
        $promotion->update();
        // $promotion->save();
        return redirect()->route('index');    }

    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();
        return redirect('index');
    }
}
