<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

//create controller into subfolder
//add this line to use this controller
use App\Http\Controllers\Controller;

//use resource
use App\Http\Resources\PostResource;

// validation
use Illuminate\Support\Facades\Validator;

use App\Models\Car;
use DB;

//use trait
use App\Traits\apiResponseTrait;

class PostController extends Controller
{
    use apiResponseTrait;
    public function index(){
        $sql="SELECT * FROM `cars`";
        $cars = DB::select($sql);

        $posts = PostResource::collection(Car::get());
        $msg = "ok";

        return $this->apiResponse($posts, $msg, 200);
    }

    public function show(string $id){
        $post = Car::find($id);
        if($post){
            $msg = "ok";
            return $this->apiResponse(new PostResource($post), $msg, 200);
        }else{
            $msg = "not found";
            return $this->apiResponse(null, $msg, 404);
        }
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title'=>'required|string',
            'price'=>'required|numeric',
            'luggages'=>'required|numeric',
            'doors'=>'required|numeric',
            'passengers'=>'required|numeric',
            'content'=>'required|string|max:1000',
            // 'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required|exists:categories,id',
        ]);
 
        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors(), 400);
        }

        $post = Car::create($request->all());
        if($post){
            return $this->apiResponse(new PostResource($post), "Post saved", 201);
        }else{
            return $this->apiResponse(null, "Post wasn't saved.", 400);
        }
    }

    public function update($id, Request $request){

        $validator = Validator::make($request->all(), [
            'title'=>'required|string',
            'price'=>'required|numeric',
            // 'luggages'=>'required|numeric',
            // 'doors'=>'required|numeric',
            // 'passengers'=>'required|numeric',
            // 'content'=>'required|string|max:1000',
            // 'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            // 'category_id'=>'required|exists:categories,id',
        ]);
 
        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors(), 400);
        }

        $post = Car::find($id);

        if(!$post){
            return $this->apiResponse(null, "Post wasn't found", 404);
        }

        $post->update($request->all());
        if($post){
            return $this->apiResponse(new PostResource($post), "Post updated", 201);
        }else{
            return $this->apiResponse(null, "Post wasn't updated.", 400);
        }
    }

    public function destroy($id){

        $post = Car::find($id);

        if(!$post){
            return $this->apiResponse(null, "Post wasn't found", 404);
        }

        $post->delete($id);

        if($post){
            return $this->apiResponse(null, "Post deleted", 200);
        }
    }
}
