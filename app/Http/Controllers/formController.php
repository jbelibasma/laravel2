<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function getFieldName(){
        return view('form');
    }
    public function submitFieldName(Request $request){
        $champ1=$request->champ1;
        $champ2=$request->champ2;
        dd([$champ1,$champ2]);
    }
}
