<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $users = DB::table('users')
                   ->get();

        return view('admin.Users.DashboardUser',[
            'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Users.AddUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('','tuTao');
        }
        try{
            $user=User::create([
                'username'=>$request->username,
                'email'=>$request->email,
                'password'=> Hash::make($request->password),
                'role'=>$request->role,
                'image'=>$imagePath??null,
                'name'=>$request->name??null,
                'sex'=>$request->sex??null,
                'dateBirth'=>$request->dateBirth??null,
            ]);
            return back()->with('success','Đăng kí người dùng thành công');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to add user: ' . $e->getMessage()])->withInput();
        }

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
        $user=User::find($id);
        $roles=['admin','user'];
        return view('admin.Users.updateUser',['user'=>$user,'roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imagePath=null;
        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('','tuTao');
        }
        try{
            $user=User::find($id);
            $user->name=$request->name??null;
            $user->role=$request->role??null;
            if($imagePath){
                $user->image=$imagePath;
            }
            $user->save();
            return back()->with('success','Cập nhật thành công');
        }catch(\Exception $e){
            
            return redirect()->back()->withErrors(['error' => 'Cập nhật thất bại: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        try{
            $user->delete();
            return redirect()->route('user.index')->with('success', 'Người dùng đã được xóa thành công.');
        }catch(Exception $e){
            return redirect()->route('user.index')->withErrors(['error'=> "Xoá thất bại : $e"]);
        }
    }
}
