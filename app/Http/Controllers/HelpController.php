<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HelpController extends Controller
{
    public function index(){
        return view('logviews.help.index');
    }
    public function rules(){
        return view('logviews.help.rules');
    }
    public function steps(){
        return view('logviews.help.steps');
    }

}
