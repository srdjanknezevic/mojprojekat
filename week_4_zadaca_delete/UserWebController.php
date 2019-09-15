<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UserWebController extends Controller
{
public function index() {
    return view('users', ["users" => User::all()]);
}
public function register() {
    return view ('register');
}
public function store(Request $request){
    $userData = $request->only(['ime','prezime','email','broj']);
   
    if(!User::create($userData)){
        return view("register", ["error"=>"Failed creating new user!"]);
    }
    return view("register", ["message" => "Succesfuly created new user"]);
}



public function edit($id){
    $user = User::where('id', $id)->first();
    return view('edit', compact('user'));
}

public function update($id, Request $request){
   
    $sentData = $request->only(["ime","prezime","email","broj"]);
    $user = User::where('id', $id)->first();
    $user->ime = $sentData['ime'];
    $user->prezime = $sentData['prezime'];
    $user->email = $sentData['email'];
    $user->broj = $sentData['broj'];
    $user->save();
    return redirect('/users');


}

public function destroy($id, Request $request) {

    $user = User::where('id', $id)->first();
    $user->delete();

    return redirect('/users');
}
}
