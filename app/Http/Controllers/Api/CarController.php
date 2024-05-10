<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;
use DB;
use App\Traits\apiResponseTrait;
use App\Models\Category;
use App\Traits\Common;

use Illuminate\Support\Facades\View;

class CarController extends Controller
{
    use Common;
    use apiResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $cars = Car::with('category', 'fuel', 'transmission')->get();
        $cars = Car::all();
        $categories = Category::all();
        if ($cars->isEmpty() || $categories->isEmpty()) {
            return $this->apiResponse(null, 'Some resources were not found.', 404);
        }

        // return $this->apiResponse($cars, 'Resources retrieved successfully.', 'success', 200);
        return $this->apiResponse(['cars' => $cars, 'categories' => $categories], 'Resources retrieved successfully.', 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //api json response
        // // Fetch categories from your database or any other source
        // $categories = Category::all(); // Assuming you have a Category model

        // // Render the Blade view
        // $view = view('admin.car.addCar', ['categories' => $categories])->render();

        // // Return the rendered view and categories as JSON
        // return response()->json([
        //     'html' => $view,
        //     'categories' => $categories,
        // ]);

        //normal view response
        $sql="SELECT * FROM `categories`";
        $categories=DB::select($sql);
        return view('admin.car.addCar', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'=>'required|string',
            'price'=>'required|numeric',
            'luggages'=>'required|numeric',
            'doors'=>'required|numeric',
            'passengers'=>'required|numeric',
            'content'=>'required|string|max:1000',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required|exists:categories,id',
        ]);
    
        // if validation fails
        if ($validator->fails()) {
            // return $this->apiResponse($validator->errors()->messages(), 'Validation failed.', 'error', 422);
            return response()->json([
                'errors' => $validator->errors()->toArray()
            ], 422);
        }

        // Check if the title already exists
        if (Car::where('title', $request->title)->exists()) {
            return response()->json([
                'error' => 'Duplicate entry for title field'
            ], 422); // Unprocessable Entity status code
        }
        
        //use trait method
        $fileName=$this->uploadFile($request->image, 'assets/admin/carImages');

        // Create a new category
        $newResource = Car::create([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'luggages' => $request->input('luggages'),
            'doors' => $request->input('doors'),
            'image' => $fileName,
            'active' => isset($request->active),
            'category_id' => $request->input('category_id'),
            'passengers' => $request->input('passengers'),
            'content' => $request->input('content'),
        ]);
        return $this->apiResponse($newResource, 'Resource created successfully.', 200);
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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:cars,title,'.$id,
            'price' => 'required|numeric',
            'luggages' => 'required|numeric',
            'doors' => 'required|numeric',
            'passengers' => 'required|numeric',
            'content' => 'required|string|max:1000',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ], $messages);

        // Check validation failure
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if($request->hasFile('image')){
        //     //use method from trait called uploadFile
        //     $fileName = $this->uploadFile($request->image, 'assets/admin/carImages');
        //     //remove old image from server
        //     unlink("assets/admin/carImages/".$request->oldImageName);
        
        // // Delete old image if exists
        // if ($car->image) {
        //     // Delete old image file
        //     Storage::delete('path_to_old_image/'.$car->image);
        // }

            // Upload and save new image
            $imagePath = $request->file('image')->store('assets/admin/carImages');
            $car->image = $imagePath;
        }

        // Find the car by ID
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['error' => 'Car not found'], 404);
        }

        if($request->hasFile('image')){
            //use method from trait called uploadFile
            $fileName = $this->uploadFile($request->image, 'assets/admin/carImages');
            $car->image = $fileName;
        } 

        // Update the car record
        $car->title = $request->title;
        $car->price = $request->price;
        $car->luggages = $request->luggages;
        $car->doors = $request->doors;
        $car->passengers = $request->passengers;
        $car->content = $request->content;
        $car->active = isset($request->active);
        // Update other fields as needed
        $car->save();

        // Return success response
        return response()->json(['message' => 'Car updated successfully'], 200);
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
            'image.mimes'=>'Incorrect image type',
            'image.max'=>'Max file size exeeced',
            'category_id.exists'=>'Choose category whithin our given categories',
        ];
    }
}
