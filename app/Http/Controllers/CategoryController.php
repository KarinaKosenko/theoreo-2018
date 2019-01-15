<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show_category_page (Request $request, $id)
    {
        $actions_id = DB::table('action_category')->where('category_id', $id)->value('action_id');

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
