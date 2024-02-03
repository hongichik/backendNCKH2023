<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Home\createHome;
use App\Models\User;
use Illuminate\Http\Request;

class homeControler extends Controller
{
    function index(createHome $request, $kkkk) {
        $username =  $request->username;
        $data = "test";
        return view('welcome')->with(["data"=>$data]);
    }
}
