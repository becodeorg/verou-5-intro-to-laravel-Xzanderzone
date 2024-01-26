<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
  public function index()
  {
    return view("users.index",['users'=>User::all ()]);
  }
  // public function show($id)
  // {
  //   return view("user",['user'=>User::findOrFail($id)]);
  // }
  
  public function show(User $user)
  {
    return view("users.show",['user'=>$user]);
  }
}