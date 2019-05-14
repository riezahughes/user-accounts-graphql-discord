<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return json_encode(array("Registration" => "success"));
    }

    public function login(){
        return json_encode(array("Status" => "Logged In"));
    }
    
    public function logout(){
        return json_encode(array("Logout" => true));
    }
    
    public function delete(){
        return json_encode(array("Delete" => true));
    }    
}
