<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function showHomePage(){
        $data = new Data;

        return view('welcome')->with(["districts"=> $data->getDistricts(), "blood_groups"=> $data->getBloodGroups()]);
    }

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

        User::create($request->all());

        return redirect()->route("/")->with(["message"=> "Thanks for joining with us"]);
    }
}
