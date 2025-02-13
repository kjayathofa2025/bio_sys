<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comp;
//use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class EmpController extends Controller
{

  /* public function registration()
    {
        return view('regis');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:users',
            'password'=>'required|min:8|max:12'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $result = $user->save();
        if($result){
            return back()->with('success','You have registered successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }
    }
    //Login
    public function login()
    {
        return view('login');
    }
    public function loginUser(Request $request)
    {
        $request->validate([            
            'email'=>'required|email:users',
            'password'=>'required|min:8|max:12'
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
               return redirect('home');
            // return view('home');
            } else {
                return back()->with('fail','Password not match!');
            }
        } else {
            return back()->with('fail','This email is not register.');
        }        
    }
    ///Logout
    public function logout()
    {
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
*/




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