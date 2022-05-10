<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Reply;

class ForumController2 extends Controller
{
    public function index(){
        $forums = Forum::all();
        return view('logviews.forum.forumlog',['forums'=>$forums]);
    }

    public function show($category){
        $forums = Forum::where('category',$category)->get();
        return view('logviews.forum.show',compact('forums'));
    }

    public function item($category,$id){
        $forum = Forum::where('id',$id)->get()->first();
        $replies = Reply::where('forum_id',$id)->get();
        return view('logviews.forum.item',['forum'=>$forum,'replies'=>$replies]);
    }
}
