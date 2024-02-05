<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index()
    {
        $sql = "SELECT `id`, `title`, `price`, `luggages`, `doors`, `passengers`, LEFT (`content`, 100) AS `content`, `image`, `category_id` FROM `cars` WHERE `active` = 1 ORDER BY ID DESC LIMIT 6";
        $cars = DB::select($sql);
        return view("index", compact("cars"));
    }

    public function about()
    {
        return view("about");
    }
    public function blog()
    {
        return view("blog");
    }
    public function listing(string $id = null)
    {
        $elementsCountPerPage = 6;
        if(isset($id)){
            // $sql = "SELECT `id`, `title`, `price`, `luggages`, `doors`, `passengers`, LEFT (`content`, 100) AS `content`, `image`, `category_id` FROM `cars` WHERE `active` = 1 AND category_id = $id ORDER BY ID DESC";
            $cars = Car::where([['active', '=', 1],['category_id', '=', $id]])->select('id', 'title', 'price', 'luggages', 'doors', 'passengers', DB::raw('LEFT(content, 100) AS content'), 'image', 'category_id')->orderBy('id', 'desc')->paginate(6);
            //number of elemnts to paginate
            $c = Car::where([['active', '=', 1],['category_id', '=', $id]])->count();
        }else{
            // $sql = "SELECT `id`, `title`, `price`, `luggages`, `doors`, `passengers`, LEFT (`content`, 100) AS `content`, `image`, `category_id` FROM `cars` WHERE `active` = 1 ORDER BY ID DESC";
            $cars = Car::where('active', 1)->select('id', 'title', 'price', 'luggages', 'doors', 'passengers', DB::raw('LEFT(content, 100) AS content'), 'image', 'category_id')->orderBy('id', 'desc')->paginate(6);
            //number of elemnts to paginate
            $c = Car::where('active', 1)->count();
        }
        //total pages pagination count
        $totalPages = ceil($c/$elementsCountPerPage);

        //only one page and no need to paginate
        if($totalPages == 1){
            $totalPages = 0;
        }

        return view("listing", compact("cars", "totalPages"));
    }
    public function contact()
    {
        return view("contact");
    }
    public function testimonials()
    {
        return view("testimonials");
    }
    public function single(string $id)
    {
        // $car = DB::table('cars')->where('id', $id)->first();
        $car = Car::findOrFail($id);
        $categories = DB::select("SELECT categories.name, COUNT(*) AS num, categories.id FROM cars INNER JOIN categories ON cars.category_id = categories.id AND cars.active = 1 GROUP BY categories.name, categories.id");
        return view("single", compact("car", "categories"));

    }
}
