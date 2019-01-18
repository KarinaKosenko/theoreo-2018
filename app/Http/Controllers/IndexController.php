<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\{Action, Tag, Brand, Category, City};

class IndexController extends Controller
{
    public function index()
    {
      /*  $actions = DB::table('actions')->get();
        
        $action_tag = DB::table('action_tag')->get();

        $tags = DB::table('tags')->get();

        $brands = DB::table('brands')->get();

        $categories = DB::table('categories')->get();

        $cities = DB::table('cities')->get(); */

        $actions = Action::all();
        
        $action_tag = DB::table('action_tag')->get();

        $tags = Tag::all();

        $brands = Brand::all();

        $categories = Category::all();

        $cities = City::all();

        return view('pages.actions.index', 
            [
            'actions' => $actions,
            'action_tag' => $action_tag, 
            'tags' => $tags, 'brands' => $brands, 
            'categories' => $categories,
            'cities'=> $cities
            ]);
    }
}
