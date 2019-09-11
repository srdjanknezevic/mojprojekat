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
}
