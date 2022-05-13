<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Reply;
use App\Models\User;

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
        $users=array();
        foreach ($forums as $forum) {
            $user=User::where('id',$forum->user_id)->get()->first();
            array_push($users,$user);
        }
        // return view('inicio.forum.show',compact('forums'));
        return view('inicio.forum.show',['forums'=>$forums,'users'=>$users]);
        // return view('forums.show',['forum_id'=>$forum_id]);//Opción 1, personalizar el nombre de la variable
    }
    public function show_item($category,$id){
        $forum=Forum::where('id',$id)->get()->first();
        $userforum=User::where('id',$forum->user_id)->get()->first();
        $replies=Reply::where('forum_id',$id)->get();
        $users=array();
        foreach ($replies as $reply) {
            $user=User::where('id',$reply->user_id)->get()->first();
            array_push($users,$user);
        }
        // $user=User::where('user_id',$replies->user_id)->get()->first();
        return view('inicio.forum.item',['user'=>$userforum,'forum'=>$forum,'replies'=>$replies,'users'=>$users]);
        // return view('inicio.forum.item',['forum'=>$forum,'replies'=>$replies]);
        // return view('forums.show',['forum_id'=>$forum_id]);//Opción 1, personalizar el nombre de la variable
    }
}
