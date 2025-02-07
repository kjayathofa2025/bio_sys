<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comp;

class EmpController extends Controller
{
    public function viewForm()
    {
        return view('empde');
    }
    public function addcuscomp(Request $request)
    {
       // dd($request->all());
      comp::create($request->all());
      return redirect()->route('home')->with('message','data created successfully');
}

}
