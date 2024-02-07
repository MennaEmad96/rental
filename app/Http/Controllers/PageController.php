<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index(){
        $sql = "SELECT `id`, `title`, `price`, `luggages`, `doors`, `passengers`, LEFT (`content`, 96) AS `content`, `image`, `category_id` FROM `cars` WHERE `active` = 1 ORDER BY ID DESC LIMIT 6";
        $cars = DB::select($sql);
        $sql = "SELECT `id`, `name`, `position`, LEFT (`content`, 117) AS `content`, `image` FROM `testimonials` WHERE `published` = 1 ORDER BY ID DESC LIMIT 3";
        $testimonials = DB::select($sql);
        $sql = "SELECT categories.name, categories.id FROM cars INNER JOIN categories ON cars.category_id = categories.id AND cars.active = 1 GROUP BY categories.name, categories.id";
        $categories = DB::select($sql);
        //not to use pagination of testimonial in home page
        $totalPages = 0;
        return view("index", compact("cars", "testimonials", "categories", "totalPages"));
    }
    public function about(){
        $sql = "SELECT `id`, `name`, `position`, LEFT (`content`, 73) AS `content`, `image` FROM `teams` WHERE `published` = 1 ORDER BY ID DESC LIMIT 6";
        $teams = DB::select($sql);
        return view("about", compact("teams"));
    }
    public function blog(){
        return view("blog");
    }
    public function listing(string $id = null){
        $elementsCountPerPage = 6;
        if(isset($id)){
            // $sql = "SELECT `id`, `title`, `price`, `luggages`, `doors`, `passengers`, LEFT (`content`, 96) AS `content`, `image`, `category_id` FROM `cars` WHERE `active` = 1 AND category_id = $id ORDER BY ID DESC";
            $cars = Car::where([['active', '=', 1],['category_id', '=', $id]])->select('id', 'title', 'price', 'luggages', 'doors', 'passengers', DB::raw('LEFT(content, 96) AS content'), 'image', 'category_id')->orderBy('id', 'desc')->get();
            //number of elemnts to paginate
            // $c = Car::where([['active', '=', 1],['category_id', '=', $id]])->count();
            //no need to paginate elements of same category
            $c = 0;
        }else{
            // $sql = "SELECT `id`, `title`, `price`, `luggages`, `doors`, `passengers`, LEFT (`content`, 96) AS `content`, `image`, `category_id` FROM `cars` WHERE `active` = 1 ORDER BY ID DESC";
            $cars = Car::where('active', 1)->select('id', 'title', 'price', 'luggages', 'doors', 'passengers', DB::raw('LEFT(content, 96) AS content'), 'image', 'category_id')->orderBy('id', 'desc')->paginate(6);
            //number of elemnts to paginate
            $c = Car::where('active', 1)->count();
        }
        //total pages pagination count
        $totalPages = ceil($c/$elementsCountPerPage);

        //only one page and no need to paginate
        if($totalPages == 1){
            $totalPages = 0;
        }

        $sql = "SELECT `id`, `name`, `position`, LEFT (`content`, 117) AS `content`, `image` FROM `testimonials` WHERE `published` = 1 ORDER BY ID DESC LIMIT 3";
        $testimonials = DB::select($sql);

        return view("listing", compact("cars", "totalPages", "testimonials"));
    }
    //cars of same category from home page search 
    public function listingSearch(Request $request){
        $messages=$this->messages();
        $data = $request->validate([
            'category'=>'required|exists:categories,id',
        ], $messages);
        
        $id = $data['category'];
        $cars = Car::where([['active', '=', 1],['category_id', '=', $id]])->select('id', 'title', 'price', 'luggages', 'doors', 'passengers', DB::raw('LEFT(content, 96) AS content'), 'image', 'category_id')->orderBy('id', 'desc')->get();
        
        $sql = "SELECT `id`, `name`, `position`, LEFT (`content`, 117) AS `content`, `image` FROM `testimonials` WHERE `published` = 1 ORDER BY ID DESC LIMIT 3";
        $testimonials = DB::select($sql);

        $totalPages = 0;
        
        return view("listing", compact("cars", "totalPages", "testimonials"));
    }
    public function contact(){
        return view("contact");
    }
    public function testimonials(){
        $sql = "SELECT `id`, `name`, `position`, LEFT (`content`, 117) AS `content`, `image` FROM `testimonials` WHERE `published` = 1 ORDER BY ID DESC";
        $testimonials = DB::select($sql);
        return view("testimonials", compact("testimonials"));
    }
    public function single(string $id){
        // $car = DB::table('cars')->where('id', $id)->first();
        $car = Car::findOrFail($id);
        $categories = DB::select("SELECT categories.name, COUNT(*) AS num, categories.id FROM cars INNER JOIN categories ON cars.category_id = categories.id AND cars.active = 1 GROUP BY categories.name, categories.id");
        return view("single", compact("car", "categories"));
    }

    public function messages()
    {
        return [
            'category.exists'=>'Choose category whithin our given categories',
        ];
    }
}
