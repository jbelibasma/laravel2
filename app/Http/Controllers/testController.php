<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class testController extends Controller
{
    //create a new fnction qui return view test
    public function home(){
        $categories= Category::all();
        return view('welcome',compact('categories'));
    }

    public function index(){
        return view('test');
    }

    public function indexParameter($name,$lastname){
        //dd($name); // remplace echo die
        // return view('testParametre',['name'=>$name]);
        return view('testParametre',compact('name','lastname'));

    }
}
