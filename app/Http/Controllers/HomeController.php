<?php

namespace App\Http\Controllers;

use App\Models\apointments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function appointments(Request $request)
    {
        $data = new apointments();
        $username = Auth::user()->name;
        $data->user_name = $username;
        $data->dr_name = $request->select;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->status=0;
        $data->save();
        return redirect('/user')->with('update','Your Appointment  successfully Placed ! ');
    }

public function viewappointment(){
    $username = Auth::user()->name;
    $user = DB::table('apointments')->where("user_name", $username)->get();
   
   return view('getdata')->with('user',$user);
}

public function deleteAppointment($id){
    $data=apointments::find($id);
    $data->delete();
    return  redirect()->back()->with('delete','Appointment has been deleted');
}

public function allappointment(){
   
    $user =apointments::all();
   
   return view('allappointment')->with('user',$user);
}

public function update($id){

    $data =apointments::find($id);
    $data->status='1';
    $data->save();
    return  redirect()->back();

   
}

public function Updateappointment(){
   
    $user =apointments::all();
   
   return view('approve')->with('user',$user);
}

public function setadmin(){
    $user = DB::table('users')->where("role",'user')->get();
    return view('newuser')->with('user',$user);
}



}


?>
