<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\{Action, Tag, Brand, Category, City};

class ActionsController extends Controller
{
    public function index()
    {
        $actions = Action::all();
        
        $action_tag = Action::with('tags')->withCount('tags')->get();

        $tags = Tag::all();

        $brands = Brand::all();

        $categories = Category::all();

        $cities = City::all();

        return view('pages.actions.index', 
            [
            'actions' => $actions,
            'action_tag' => $action_tag, 
            'tags' => $tags, 
            'brands' => $brands, 
            'categories' => $categories,
            'cities'=> $cities
            ]);
    }

    public function show_actions_by_brand (Request $request, $brand_id)
    {
        $actions = Action::where('brand_id', '=', $brand_id)->get();

        $action_tag = Action::with('tags')->withCount('tags')->get();

        $tags = Tag::all();

        $brands = Brand::all();

        $categories = Category::all();

        $cities = City::all();

        return view('pages.actions.index', 
            [
            'actions' => $actions,
            'action_tag' => $action_tag, 
            'tags' => $tags,
            'brands' => $brands, 
            'categories' => $categories,
            'cities'=> $cities
            ]);
        
    }

    public function show_actions_by_category (Request $request, $category_id)
    {
        $actions_id = DB::table('action_category')->where('category_id', $category_id)->value('action_id');

        $actions_id = [$actions_id];

        foreach ($actions_id as $id) {
            $actions = DB::table('actions')->where('id', $id)->get();
        }

        //$actions = Category::with('actions')->withCount('actions')->where('id', '=', $category_id)->get();

        $action_tag = Action::with('tags')->withCount('tags')->get();

        $tags = Tag::all();

        $brands = Brand::all();

        $categories = Category::all();

        $cities = City::all();

        return view('pages.actions.index', 
            [
            'actions' => $actions,
            'action_tag' => $action_tag, 
            'tags' => $tags,
            'brands' => $brands, 
            'categories' => $categories,
            'cities'=> $cities
            ]);

    }

    public function show_actions_by_tag (Request $request, $tag_name)
    {
        $tag_id = DB::table('tags')->where('name', $tag_name)->value('id');

        $actions_id = DB::table('action_tag')->where('tag_id', $tag_id)->pluck('action_id');

        $actions_id = [$actions_id];

        foreach ($actions_id as $id) {
            $actions = DB::table('actions')->where('id', $id)->get();
        }

        $action_tag = DB::table('action_tag')->get();

        $tags = Tag::all();

        $brands = Brand::all();

        $categories = Category::all();

        $cities = City::all();

        return view('pages.actions.index', 
            [
            'actions' => $actions,
            'action_tag' => $action_tag, 
            'tags' => $tags,
            'brands' => $brands, 
            'categories' => $categories,
            'cities'=> $cities
            ]);
        
    }
}