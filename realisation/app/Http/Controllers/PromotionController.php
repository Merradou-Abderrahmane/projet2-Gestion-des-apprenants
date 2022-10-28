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

        return view('promotion.index', ['promotions' => $promotions]);
    }

    public function create()
    {
        return view('promotion.addPromotion');
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
        $students = $promotion->students;

        // dd($promotion->students);
        // return Promotion::find($id);
                                     #compact('promotion')
        return view('promotion.editPromotion', ['promotion' => $promotion, 'students' => $students]);
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
    <td>'.$promotion->promotionName.'</td>
    <td>
    <a href="edit/'.$promotion->id.'" >Edit</a>
    <a href="delete/'.$promotion->id.'">Delete</a>
    <td>
    </tr>';
    }
    return Response($output);
       }
       }
    }

    public function showStudents($id)
    {
        $promotion = Promotion::find($id);
        return view('showStudents', ['promotion' => $promotion]);
    }
}
