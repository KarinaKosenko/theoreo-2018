<?php

namespace App\Http\Controllers\Admin;

use App\Http\COntrollers\Controller;
use Illuminate\Http\Request;
use App\Models\Action;
use App\Models\City;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ActionCategory;
use App\Models\ActionTag;

class ActionController extends Controller
{
	// добавить авторизацию и валидацию

    public function index() 
    {
    	
    	$actions = Action::orderby('id', 'DESC')
    			->get();
   
    	return view('adminlte.layouts.primary', [
    		'page' => 'adminlte.pages.actions',
    		'h1' => 'Управление акциями',
    		'actions' => $actions 
    	]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {   
        return view('adminlte.layouts.primary', [
            'page' => 'adminlte.parts.action_create',
            'h1' => 'Добавление акции',
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'cities' => City::all(),
            'tags' => Tag::all()
            
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {	
    	
        $action = Action::create([
        	'name' => $request->name,
        	'brand_id' => $request->brand,
        	'city_id' => $request->city,
        	'active_from' => $request->active_from,
        	'active_to' => $request->active_to,
        	'text' => $request->text,
        	'upload_id' => '2', // пока заглушка
        	'status' => 'approved',
        	'links' => $request->links,
        	'type' => $request->type
        ]);

        // Сохраняем в таблицу action_category

        $categories_id = $request->categories;

        foreach ($categories_id as $category_id) {

        	ActionCategory::create([
        		'action_id' => $action->id,
        		'category_id' => $category_id
        	]);
        }


        // Сохраняем в таблицу action_tag

        $tags_id = $request->tags;

        foreach ($tags_id as $tag_id) {
        	ActionTag::create([
        		'action_id' => $action->id,
        		'tag_id' => $tag_id
        	]);
        }

        return redirect()->route('admin.actions');
      
    }
    

    public function edit($id = null)
    {

    }

    public function update($id = null)
    {

    }

    public function delete($id = null)
    {

    }
}
