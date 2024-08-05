<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // $slide = Category::with('Category')->orderBy('created_at','desc')->take(2)->get();
        $slide = Posts::with('category')->orderBy('created_at','desc')->take(2)->get();
        // $data_doisong=Posts::join();
        $data = Category::with(['posts' => function( $query) {
            $query->orderBy('views', 'desc'); // Sắp xếp theo lượt xem giảm dần
        }])->limit(6)->get();
        return view('home',['slide'=>$slide,'data'=> $data]);
    }
  



    public function search(Request $request){
        $q= $request->input('search');

        $search = Posts::with('category')->where('title', 'LIKE', '%' . $q . '%')->get();

        // return view('search',$search);
        return view('search', ['search' => $search,'q'=>$q]);
    }
    
    public function categories($slug){
        $dm=DB::table('categories')
            ->where('slug',$slug)
            ->first();
        $id=$dm->id;
        $ten_loai=$dm->ten_loai;
        $slug=$dm->slug;
        $data=DB::table('posts')
            ->where('id_category',$id)
            ->get();
        return view('categories',['posts'=>$data,'ten_loai'=>$ten_loai,'slug'=>$slug]);
    }
    public function profile(){
        $user=Auth::user();
        $sex=['nam','nữ','khác'];
        return view('profile')->with(['user'=>$user,'sexs'=>$sex]);
    }
}