<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

//create controller into subfolder
//add this line to use this controller
use App\Http\Controllers\Controller;

//use resource
use App\Http\Resources\PostResource;

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
}
