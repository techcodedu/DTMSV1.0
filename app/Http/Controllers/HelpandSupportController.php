<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpandSupportController extends Controller
{
    //  //
    public function index(){
        return view ('backend.help');
    }
}
