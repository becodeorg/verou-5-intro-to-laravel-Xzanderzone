<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function index()
  {
    return view("forms.form");
  }
  public function create(Request $request)
  {
    // dd($request);
    $email= $request->email;
    $name= $request->name;
    $password= $request->password;
    User::create(['name'=> $name, 'email'=> $email,'password'=> $password,  ]);
    return view ('forms.submittedForm');
  }
    public function destroy(int $id)
  {
    User::destroy($id);
    return redirect('/users');
  }
  
}