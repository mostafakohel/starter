<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function ShowUserName(){

        return 'Mostafa Kohel';
    }

    public function getIndex(){

        $data=[];
        $data['id']=5;
        $data['name']='mostafa';

        return view('welcome',$data);

    }

}

