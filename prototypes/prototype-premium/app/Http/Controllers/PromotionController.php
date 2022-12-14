<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use Illuminate\Pagination\paginator;

class PromotionController extends Controller
{
    //
    public function index()
    {
        // $promotions = Promotion::latest()->paginate(10);
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
        return redirect('index');    }

    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();
        return redirect('index');
    }

    public function search(Request $request)
    {
    if($request->ajax()){
        $input = $request->key;
    $output="";
    $promotion=Promotion::where('promotionName','like','%'.$input."%")
        ->orWhere('id','like','%'.$input."%")
    ->get();
    // if($promotion)
    {
    foreach ($promotion as $promotion) {
    $output.='<tr>
    <td>'.$promotion->id.'</td>
    <td>'.$promotion->promotionName.'</td>
    <td>
    <a href="editPromotion/'.$promotion->id.'"><button>Edit</button></a>
    <a href="deletePromotion/'.$promotion->promotionName.'"><button>Delete</button></a>
    <td>
    </tr>';
    }
    return Response($output);
       }
       }
    }
}
