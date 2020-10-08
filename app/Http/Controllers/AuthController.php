<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function addDonor(Request $request){
        $request->validate([
            "name" => "required",
            "phone" => "required|unique:users",
            "dob" => "required",
            "blood_group" => "required",
            "address" => "required",
            "district" => "required",
            "password" => "required|confirmed",
        ]);
        
        $password = Hash::make($request->password);
        $request->merge(['password' => $password]);

        User::create($request->all());

        return redirect()->back()->with("message", "Thanks for joining with us");
    }
}
