<?php

namespace App\Http\Controllers\admin;
use App\Models\Posts;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Posts::with('category')->get();
        return view('admin.News.DashboardNew',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.News.addPost',['categories'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {   
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('','tuTao');
        }
        Posts::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'id_user'=>Auth::id(),
            'id_category'=>$request->id_category,
            'content'=>$request->content,
            'image'=>$imagePath??null,
        ]);
        return back()->with('success','Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Posts::find($id);
        $categories=Category::all();
        return view('admin.News.updatePost',['post'=>$post,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request,string $id)
    {
        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('','tuTao');
        }
        Posts::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'content'=>$request->content,
            'id_category'=>$request->id_category,
            'image'=>$imagePath??null
        ]);
        return back()->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Posts::find($id);
        try{
            $post->delete();
            return redirect()->route('admin.News')->with('success','Xoá thành công');
        }catch(Exception $e){
            return redirect()->route('admin.News')->withErrors(['error'=>'Xoá thất bại']);
        }
    }
}
