<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\reg;
class uController extends Controller
{

    public function index()
    {
      return view('index'); 
    }
    public function reg()
    {
        return view('reg');
    }
    public function regAction(Request $req)
    {
      $name=$req->input('name');
      $email=$req->input('email');
      // echo $name;
      $data=['name'=>$name,
      'email'=>$email];
     reg::insert($data);
     return redirect('/');
    }
}
