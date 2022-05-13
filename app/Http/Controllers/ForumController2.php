<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Reply;
use App\Models\User;

class ForumController2 extends Controller
{
    public function index(){
        $forums = Forum::all();
        return view('logviews.forum.forumlog',['forums'=>$forums]);
    }

    public function show($category){
        $forums=Forum::where('category',$category)->get();
        $users=array();
        foreach ($forums as $forum) {
            $user=User::where('id',$forum->user_id)->get()->first();
            array_push($users,$user);
        }
        return view('logviews.forum.show',['forums'=>$forums,'users'=>$users]);
    }

    public function create(){
        return view('logviews.forum.create');
    }
    public function store(Request $request, $user_id){
        // return $request->all();
        $forum = new Forum();
        $forum->title=$request->title;
        $forum->category=$request->category;
        $forum->description=$request->description;
        $forum->user_id=$user_id;
        $forum->save();
        // return $forum;
        return redirect()->route('forumlog.item',[$forum->category,$forum->id]);
    }

    public function edit(Request $request, $user_id){
        // return $request->all();
        $forum = new Forum();
        $forum->title=$request->title;
        $forum->category=$request->category;
        $forum->description=$request->description;
        $forum->user_id=$user_id;
        $forum->save();
        // return $forum;
        return redirect()->route('forumlog.item',[$forum->category,$forum->id]);
    }
    public function reply(Request $request, $user_id, Forum $forum){
        $reply=new Reply();
        $reply->user_id=$user_id;
        $reply->forum_id=$forum->id;
        $reply->description=$request->description;
        $reply->save();
        return redirect()->route('forumlog.item',[$forum->category,$forum->id]);
    }
    public function update(Request $request, Forum $forum){

        $forum->title=$request->title;
        $forum->description=$request->description;
        $forum->save();
        return redirect()->route('forumlog.item',[$forum->category,$forum->id]);
    }

    public function item($category,$id){
        $forum=Forum::where('id',$id)->get()->first();
        $userforum=User::where('id',$forum->user_id)->get()->first();
        $replies=Reply::where('forum_id',$id)->get();
        $users=array();
        foreach ($replies as $reply) {
            $user=User::where('id',$reply->user_id)->get()->first();
            array_push($users,$user);
        }
        return view('logviews.forum.item',['user'=>$userforum,'forum'=>$forum,'replies'=>$replies,'users'=>$users]);
    }
}
