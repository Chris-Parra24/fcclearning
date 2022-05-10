<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Reply;

class ForumController extends Controller
{
    public function index(){
        // $users=User::paginate();
        // return $users; 
        // return view('forums.index',compact('users'));
        $forums=Forum::all();
        return view('inicio.forum',compact('forums'));
    }

    // public function create(){
    //     return view('forums.create');
    // }
    
    // public function store(){
    //     return view('forums.store');
    // }

    public function show($category){
        $forums=Forum::where('category',$category)->get();
        return view('inicio.forum.show',compact('forums'));
        // return view('forums.show',['forum_id'=>$forum_id]);//Opción 1, personalizar el nombre de la variable
    }
    public function show_item($category,$id){
        $forum=Forum::where('id',$id)->get()->first();
        $replies=Reply::where('forum_id',$id)->get();
        return view('inicio.forum.item',['forum'=>$forum,'replies'=>$replies]);
        // return view('forums.show',['forum_id'=>$forum_id]);//Opción 1, personalizar el nombre de la variable
    }
}
