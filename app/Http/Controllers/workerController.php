<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workerController extends Controller
{
    public function addworker(Request $req)
    {

        $req->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'password' => 'required',


        ],
        [
            "firstname.required"=>'please enter the first name!',
            "lastname.required"=>'please enter the last name!',
            "email.required"=>'please enter the email name!',
            "email.email"=>'enter the email with corrext formet!',
            "city.required"=>'please enter the city name!',
            "password.required"=>'please enter the password!',


        ]);


        return $req->all();

    }
}
