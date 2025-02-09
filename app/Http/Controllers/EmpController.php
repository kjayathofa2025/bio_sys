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
             comp::create($request->all());
            $users = comp::all();
            return view('cusdis',compact('users'));
    }
    public function UpdateForm()
    {
            return view('cusupd');
    }
    public function getCus(Request $request)
    {
                $customer = comp::where('brcode',$request->brcode)->get();
                return view('cusupd',compact('customer'));
    }
    public function updateCus(Request $request)
   {
        $upd_data =['compno' =>$request->compno,
                    'comptype' => $request->comptype,
                     'complaints' => $request->complaints,
                     'mobileno' => $request->mobileno,
                     'region' => $request->region,
                     'vehtype'=>$request->vehtype];
        comp::where('brcode',$request->brcode)->update($upd_data);
        $users = comp::all();
        return view('cusdis',compact('users'));
    }
    public function deleteCus(Request $request)
   {
        comp::where('brcode',$request->brcode)->delete();
        $users = comp::all();
        return view('cusdis',compact('users'));
    }
}   