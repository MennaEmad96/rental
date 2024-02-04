<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql = "SELECT * FROM `messages`";
        $messages = DB::select($sql);
        return view('admin.message.messages', compact("messages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstName'=>'required|string|max:50',
            'lastName'=>'required|string|max:50',
            'email'=>'required|email',
            'content'=>'required|string|max:1000',
        ]);
        Message::create($data);
        return back()->with('success','Message sent sucssefully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = DB::table('messages')->where('id', $id)->first();
        Message::where('id', $id)->update(['isRead' => 1]);
        return view('admin.message.showMessage', compact("message"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('messages')->where('id', $id)->delete();
        return redirect('admin/messages')->with('success','Data deleted sucssefully');
    }
}
