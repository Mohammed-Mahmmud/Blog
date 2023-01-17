<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
//         public function create(){

//         return view('SignHere');
//     }

// public function store(USER $user, Request $request){
//     $user=User::where('email',$request->Lemail)->get();
//     if($user[0]->password==$request->Lpassword){
//       return redirect()->route('posts.index');

//            }
//     // else{
//     //     return redirect()->route('login');
//     // }
//     }


// public function store(Request $request){
//     $user=User::whereEmail($request->Lemail);
//     if($user->email== &&$user->password==$request->Lpassword ){
//         return view('SignHere',['userName'=>$user->name]);
//     }
//     else{
//         return "Invalid ";
//     }

// }

//         public function store(Request $request){
//         $user = new User();
//         $user->name ;
//         $user->email = $request->Lemail  ;
//         $user->password = $request->Lpassword;
//         $user->save();
//     return redirect()->route('home') ;
// }
}
