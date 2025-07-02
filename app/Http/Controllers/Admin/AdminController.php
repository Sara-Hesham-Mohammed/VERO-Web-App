<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware("auth")->except("showable","login");

    }

    public function show(){
        return "For admin only";
    }
    public function login(){
        return "LOGIN IN HERE";
    }
    
    public function showable(){
        $data = [];
        $data["name"] = "Jane Doe";
        $data["role"] = "admin";
        $data["altered"] = "Data being sent using the data array";
        return view('admin', $data);
    }
}
