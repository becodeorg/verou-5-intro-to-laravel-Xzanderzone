<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view("form");
  }
  public function create(Request $request)
  {
    // dd($request);
    $email= $request->email;
    $name= $request->name;
    $password= Hash::make($request->password);
    User::create(['name'=> $name, 'email'=> $email,'password'=> $password,  ]);
    return view ('submittedForm');
  }
}