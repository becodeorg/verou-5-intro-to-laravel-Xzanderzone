<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
  public function index()
  {
    // echo var_dump(User::all());
    return view("users",['users'=>User::all ()]);
  }
  // public function show($id)
  // {
  //   return view("user",['user'=>User::findOrFail($id)]);
  // }
  
  public function show(User $user)
  {
    // echo var_dump($user);
    // echo '<br>';
    // echo var_dump($user);

    return view("user",['user'=>$user]);
  }
}