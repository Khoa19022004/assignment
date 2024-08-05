<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
class DetaiPostsController extends Controller
{
    public function processComment(Request $request){
        $request->validate(
            [
                'comment'=>'required'
            ],
            [
                'comment.required'=>"Vui lòng nhập nội dung bình luận"
            ]
        );
        
        Comment::create(
            [
                'content'=>$request->comment,
                'id_post'=>$request->id_post,
                'id_user'=>auth()->id(),

            ]
        );

        return redirect()->back();
    }

    public function detailPost($slug,$slugPost){
        $dm=DB::table('categories')
                ->where('slug',$slug)
                ->first();
        $id_dm=$dm->id;
        $p=DB::table('posts')
                ->where('id_category',$id_dm)
                ->where('slug',$slugPost)
                ->first();
        $id_post=$p->id;
        $countCommment=Comment::where('id_post',$id_post)->count();
        $comment =Comment::with('user')->where('id_post',$id_post)->get();
        $tinlq=Posts::with('category')->where('id_category',$dm->id)->limit(2)->get();
        return view('detailPost',['posts'=>$p,'category'=>$dm->ten_loai,'slug'=>$slug,'comment'=>$comment,'countComment'=>$countCommment,'tinlq'=>$tinlq]);
    }
}
