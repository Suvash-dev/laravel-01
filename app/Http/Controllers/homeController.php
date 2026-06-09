<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function homepage(){
        return view('Homepage');
    }
    
    function store(Request $request){
       
           dd($request->all());

        $request->validate([
            "full_name" => 'required|max:50|min:5',
            "phone_number" => 'required|digits:11',
            "email" => 'nullable|email',
            "parent_name" => 'required|max:50|min:2',
           // "dead_line" => 'required|equals_or_after:today',
            "address" => 'nullable|max:100',
            "transaction_id" => 'required',
            "payment_method" => 'required',



        ],[
            "full_name.required" => 'Name must required'
        ]);
    }

}

