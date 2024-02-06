<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql="SELECT * FROM `cars`";
        $cars = DB::select($sql);
        return view('admin.car.cars', compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sql="SELECT * FROM `categories`";
        $categories=DB::select($sql);
        return view('admin.car.addCar', compact('categories'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'title'=>'required|string',
            'price'=>'required|numeric',
            'luggages'=>'required|numeric',
            'doors'=>'required|numeric',
            'passengers'=>'required|numeric',
            'content'=>'required|string|max:1000',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required|exists:categories,id',
        ], $messages);
        //use method from traits called uploadFile
        $fileName=$this->uploadFile($request->image, 'assets/admin/carImages');
        $data['image']=$fileName;
        $data['active'] = isset($request->active);
        Car::create($data);
        return redirect('admin/cars')->with('toast_success','Data stored sucssefully');
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
        $car = DB::table('cars')->where('id', $id)->first();
        $sql="SELECT * FROM `categories`";
        $categories=DB::select($sql);
        return view('admin.car.editCar', compact("car", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'title'=>'required|string,'.$id,
            'price'=>'required|numeric',
            'luggages'=>'required|numeric',
            'doors'=>'required|numeric',
            'passengers'=>'required|numeric',
            'content'=>'required|string|max:1000',
            'image'=>'sometimes|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required|exists:categories,id',
        ], $messages);
        if($request->hasFile('image')){
            //use method from traits called uploadFile
            $fileName = $this->uploadFile($request->image, 'assets/admin/carImages');
            $data['image'] = $fileName;
            //remove old image from server
            unlink("assets/admin/carImages/".$request->oldImageName);
        }
        $data['active'] = isset($request->active);
        Car::where('id', $id)->update($data);
        return redirect('admin/cars')->with('toast_success','Data updated sucssefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imageName=DB::table('cars')->select('image')->where('id', $id)->first();
        $sql="DELETE FROM `cars` WHERE `id` = $id";
        DB::delete($sql);
        unlink("assets/admin/carImages/".$imageName->image);
        return redirect('admin/cars')->with('toast_success','Data deleted sucssefully');
    }

    public function messages()
    {
        return [
            'title.max'=>'max is 3',
            'image.mimes'=>'Incorrect image type',
            'image.max'=>'Max file size exeeced',
            'category_id.exists'=>'Choose category whithin our given categories',
        ];
    }
}
