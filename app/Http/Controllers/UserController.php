<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql = "SELECT * FROM `users`";
        $users = DB::select($sql);
        return view('admin.user.users', compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'fullName'=>'required|string|max:50',
            'userName'=>'required|string|max:50|unique:users,userName',
            // 'password'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'password'=>'required|string|min:8',
            'email'=>'required|email|unique:users,email',
        ], $messages);
        $data['password'] = Hash::make($data['password']);
        $data['active'] = isset($request->active);
        User::create($data);
        return redirect('admin/users')->with('toast_success','Data stored sucssefully');
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
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.user.editUser', compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'fullName'=>'required|string|max:50',
            'userName'=>'required|string|max:50|unique:users,userName,'.$id,
            'password'=>'required|string|min:8',
            'email'=>'required|email|unique:users,email,'.$id,
        ], $messages);
        $data['password'] = Hash::make($data['password']);
        $data['active'] = isset($request->active);
        User::where('id', $id)->update($data);
        return redirect('admin/users')->with('toast_success','Data updated sucssefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function messages()
    {
        return [
            'password.regex'=>'The password must contain at least one lowercase letter, one uppercase letter, one digit, one special character from the specified set @$!%*?&, and with minimum length of 8 characters.',
        ];
    }
}
