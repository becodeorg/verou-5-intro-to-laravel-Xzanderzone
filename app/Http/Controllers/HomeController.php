<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index()
  {
    return view("welcome");
  }
  public function hello()
  {
    return view("hello");
  }
  public function post()
  {
    return view("post");
  }
  public function posts()
  {
    return view("post");
  }
  public function form()
  {
    return view("forms.form");
  }
}