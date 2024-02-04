<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql="SELECT * FROM `testimonials`";
        $testimonials=DB::select($sql);
        return view('admin.testimonial.testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.addTestimonial');
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
        $fileName = $this->uploadFile($request->image, 'assets/admin/testimonialImages');
        $data['published'] = isset($request->published);
        $data['image'] = $fileName;
        Testimonial::create($data);
        return redirect('admin/testimonials')->with('success','Data stored sucssefully');
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
        $testimonial = DB::table('testimonials')->where('id', $id)->first();
        return view('admin.testimonial.editTestimonial', compact("testimonial"));
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
            $fileName = $this->uploadFile($request->image, 'assets/admin/testimonialImages');
            $data['image'] = $fileName;
            //remove old image from server
            unlink("assets/admin/testimonialImages/".$request->oldImageName);
        }
        $data['published'] = isset($request->published);
        Testimonial::where('id', $id)->update($data);
        return redirect('admin/testimonials')->with('success','Data updated sucssefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imageName=DB::table('testimonials')->select('image')->where('id', $id)->first();
        $sql="DELETE FROM `testimonials` WHERE `id` = $id";
        DB::delete($sql);
        unlink("assets/admin/testimonialImages/".$imageName->image);
        return redirect('admin/testimonials')->with('success','Data deleted sucssefully');
    }
}
