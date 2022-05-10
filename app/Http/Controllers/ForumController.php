<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        // $users=User::paginate();
        // return $users; 
        // return view('forums.index',compact('users'));
        return view('inicio.forum');
    }

    // public function create(){
    //     return view('forums.create');
    // }
    
    // public function store(){
    //     return view('forums.store');
    // }

    // public function show($id){
    //     $forum=User::find($id);
    //     return view('forums.show',compact('forum'));
    //     return view('forums.show',['forum_id'=>$forum_id]);//Opción 1, personalizar el nombre de la variable
    // }
}
