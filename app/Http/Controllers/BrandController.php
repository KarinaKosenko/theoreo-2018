<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function show_actions_by_brand (Request $request, $brand_name)
    {
        $brand_id = DB::table('brands')->where('name', $brand_name)->value('id');

        $actions_id = DB::table('actions')->where('brand_id', $brand_id)->pluck('id');

        $actions_id = [$actions_id];

        foreach ($actions_id as $id) {
            $actions = DB::table('actions')->where('id', $id)->get();
        }

        $action_tag = DB::table('action_tag')->get();

        $tags = DB::table('tags')->get();

        $brands = DB::table('brands')->get();

        $categories = DB::table('categories')->get();

        $cities = DB::table('cities')->get();

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
