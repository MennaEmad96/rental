<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Car;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql = "SELECT * FROM `categories`";
        $categories = DB::select($sql);
        return view('admin.category.categories', compact("categories"));
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
        $data = $request->validate([
            'name'=>'required|string|max:50',
        ]);
        Category::create($data);
        return redirect('admin/categories');
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
        $category = DB::table('categories')->where('id', $id)->first();
        return view('admin.category.editCategory', compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'=>'required|string|max:50',
        ]);        
        DB::update('UPDATE `categories` SET `name` = ? WHERE `id` = ?',[$data['name'], $id]);
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $found = DB::table('cars')->where('category_id', $id)->count();
        if($found){
            return dd("ok");
        }else{
            DB::table('categories')->where('id', $id)->delete();
            return redirect('admin/categories');
        }
    }

    public function messages()
    {
        return [
            'title.required'=>'العنوان مطلوب',
            'title.string'=>'Should be string',
            'description.required'=>'Should be text',
            'image.required'=>'Please be sure to select an image',
            'image.mimes'=>'Incorrect image type',
            'image.max'=>'Max file size exeeced',
            'category_id.exists'=>'Choose category whithin our given categories',
        ];
    }
}
