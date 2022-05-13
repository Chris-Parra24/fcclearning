<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){
        return view('logviews.resource.index');
    }

    public function show($tipo){
        return view('logviews.resource.show');
    }
    public function create(){
        return view('logviews.resource.create');
    }

    public function store(Request $request){
        $path=$request->file('resource')->store('resources');
        return $path;
    }

    // public function show(Resource $resource){

    // }
}
