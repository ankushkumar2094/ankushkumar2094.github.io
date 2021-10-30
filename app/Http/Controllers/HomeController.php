<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Controllers\DB;

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
    
    public function admin(Request $request){
        $url = $request->url();
        //$users = User::where('id','!=',auth()->id())->get();
       //$users = User::where([['isAdmin','!=',1],['status','=',0],])->get();
        
        //dd($users);
        
//        $users = DB::table('users')
//                    ->where('isAdmin', '!=', 1)
//                    ->orWhere('status', '=', 0)
//                    ->get();
       
        if($url == 'http://localhost/Admin_Approval_System/public/rejectedUser'){
            
             $users = User::where('status','=',-1)->get();
             return view('scheduletask',compact('users',$users));
            
        }elseif($url == 'http://localhost/Admin_Approval_System/public/home/admin')
        {
            $users = User::where('status','=',0)->get();
            return view('admin',compact('users',$users));
            }
        else{
            echo "OOPssssss Something went wrong!!";
        }
        
    }
    
    
    public function approve($id){
        $user = User::findorfail($id);
        $user->status = 1;
        $user->save();
        return redirect()->action('HomeController@admin');
        
    }
    
      public function reject($id){
        $user = User::findorfail($id);
        $user->status = -1;
        $user->save();
        return redirect()->action('HomeController@admin');
    }
     
     public function deleteUser($id){
        $user = User::findorfail($id);
        $user->delete();
        
         return redirect()->action('HomeController@admin');
    }
    

    
   
    
}
