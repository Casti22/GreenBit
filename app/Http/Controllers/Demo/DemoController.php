<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Index(){
        return view('nosotros');
    } // end method

    public function ContactMethod(){
        return view('contacto');
    }
}
