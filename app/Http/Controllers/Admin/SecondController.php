<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('ShowString2');
    }

    public function ShowString0(){
        return 'Star0';
    }

    public function ShowString1(){
        return 'Star1';
    }

public function ShowString2(){
    return 'Sta2r';
}

}
