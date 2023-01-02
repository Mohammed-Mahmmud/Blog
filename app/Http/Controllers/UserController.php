<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request ;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return USER::all();
    }
 public function show($id)
 {
     return USER::findorfail($id);
 }

public function create(Request $request)
{
    $user = new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password = Hash::make($request->password);
    $user->save();
    return "user has been added " ;
}
public function delete($id)
{
    $user = User::findorfail($id);
    $user->delete();
    return 'User Has Been Deleted';
}
public function update(Request $request, $id)
{
    $user = USER::findorfail($id);
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password= Hash::make($request->password);
    $user->update();
    return "Usrer Has been updated ";
}
//Check password = Hashed in DB
public function check($id)
{
    $user =USER::findorfail($id);
    if (Hash::check('123456789', $user->password)) {
        return "Choosen Password == Hashed" ;
    } else {
        return "Chossen Password != Hashed";
    }
}
}
