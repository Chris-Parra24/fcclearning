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

    public function store(Request $request, $user_id){
        
        if ($request->hasFile('resource')){
            if($request->file('resource')->isValid()){
                // $uploaded_files = $request->file->store('public/uploads/');
                $path=$request->file('resource')->store('public/resources');
                // return $path;
            }
        }else{
            return "El request no tiene el archivo";
        }
        

    }

    // public function show(Resource $resource){

    // }
}
