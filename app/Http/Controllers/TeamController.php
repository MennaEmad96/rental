<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Traits\Common;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql="SELECT * FROM `teams`";
        $teams=DB::select($sql);
        return view('admin.team.teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.addTeam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'content'=>'required|string|max:1000',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'position' => 'required|string|max:50',
        ]);
        //use method from traits called uploadFile
        $fileName = $this->uploadFile($request->image, 'assets/admin/teamImages');
        $data['published'] = isset($request->published);
        $data['image'] = $fileName;
        Team::create($data);
        return redirect('admin/teams')->with('toast_success','Data stored sucssefully');
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
        $team = DB::table('teams')->where('id', $id)->first();
        return view('admin.team.editTeam', compact("team"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'content'=>'required|string|max:1000',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'position' => 'required|string|max:50',
        ]);
        if($request->hasFile('image')){
            //use method from traits called uploadFile
            $fileName = $this->uploadFile($request->image, 'assets/admin/teamImages');
            $data['image'] = $fileName;
            //remove old image from server
            unlink("assets/admin/teamImages/".$request->oldImageName);
        }
        $data['published'] = isset($request->published);
        Team::where('id', $id)->update($data);
        return redirect('admin/teams')->with('toast_success','Data updated sucssefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imageName=DB::table('teams')->select('image')->where('id', $id)->first();
        $sql="DELETE FROM `teams` WHERE `id` = $id";
        DB::delete($sql);
        unlink("assets/admin/teamImages/".$imageName->image);
        return redirect('admin/teams')->with('toast_success','Data deleted sucssefully');
    }
}