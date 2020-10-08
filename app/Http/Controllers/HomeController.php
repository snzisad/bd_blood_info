<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function showHomePage(){
        $data = new Data;
        
        return view('welcome')->with(["districts"=> $data->getDistricts(), "blood_groups"=> $data->getBloodGroups()]);
    }
}
