<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.DashboardCategory',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'ten_loai'=>'required|string|unique:categories,ten_loai'
            ],[
                'ten_loai.unique'=>'Tên danh mục đã tồn tại. Vui lòng chọn tên khác.',
                'ten_loai.required'=>'Không được để trống. Vui lòng nhập tên'
            ]);
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('','tuTao');
            }
            Category::create([
                'ten_loai'=>$request->ten_loai,
                'image'=>$imagePath??null
            ]);
    
            return redirect()->route('admin.category.add')->with('success','Thêm danh mục thành công');
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
        $category=Category::find($id);
        return view('admin.category.updateCategory',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category=Category::find($id);
        $category->ten_loai=$request->ten_loai;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('','tuTao');
            $category->image=$imagePath;
        }
        $category->save();
        return redirect()->route('admin.category.update',$category::find($id))->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->route('admin.category')
                             ->with('success', 'Danh mục đã được xóa thành công.');
        } catch (Exception $e) {
            return redirect()->route('admin.category')
                             ->withErrors(['error'=>'Không thể xóa danh mục vì có bài viết liên quan.']);
        }
    }
}
