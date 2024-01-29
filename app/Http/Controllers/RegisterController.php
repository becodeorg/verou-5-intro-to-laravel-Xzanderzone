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
    // $validated = $request->validate([
    //   'email' => 'required|unique:posts|max:255',
    //   'name' => 'required',
    // ]);
    $email= $request->email;
    $name= $request->name;
    $password= $request->password;
    try{
      User::create(['name'=> $name, 'email'=> $email,'password'=> $password,  ]);
    }catch(\Exception $e){
      return view ('forms.form',["error"=>$e->getCode()]); 
    }
    return view ('forms.submittedForm');
  }
    public function destroy(int $id)
  {
    User::destroy($id);
    return redirect('/users');
  }
  
}