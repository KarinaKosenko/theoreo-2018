<?php

namespace App\Http\Controllers\Admin;

use App\Http\COntrollers\Controller;
use Illuminate\Http\Request;
use App\Models\{Action, City, Brand, Category, Tag};


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
        $image = session('image');
        $image_src = session('image_src');
       
        return view('adminlte.layouts.primary', [
            'page' => 'adminlte.pages.action_create',
            'h1' => 'Добавление акции',
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'cities' => City::all(),
            'tags' => Tag::all(),
            'image' => $image
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
        	'upload_id' => $request->image_id,  
        	'status' => 'approved',
        	'links' => $request->links,
        	'type' => $request->type
        ]);

        // Сохраняем в таблицы action_category и action_tag

        $action->categories()->attach($request->categories);

        $action->tags()->attach($request->tags);

        return redirect()->route('admin.actions');
    }
    

    public function edit($id = null)
    {
        $action = Action::findOrFail($id);

        $actionCategoryArray = $action->categories->pluck('id')->toArray();

        $actionTagArray = $action->tags->pluck('id')->toArray();

        $image = session('image');
      
        if ($image) {
            $image_id = $image->id;
        }

         return view('adminlte.layouts.primary', [
            'page' => 'adminlte.pages.action_edit',
            'h1' => 'Редактирование акции',
            'action' => $action,
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'cities' => City::all(),
            'tags' => Tag::all(),
            'actionCategoryArray' => $actionCategoryArray ?? [],
            'actionTagArray' => $actionTagArray ?? [],
            'image_id' => $image_id ?? $action->upload->id,
            'image' => $image

        ]); 
    }

    public function update(Request $request, $id = null)
    {
        $action = Action::findOrFail($id);
        
        $image = session('image');
        $image_src = session('image_src');

        $request->merge(['upload_id' => $request->image_id]);

        $action->update($request->all()); 
       
        // Сохраняем в таблицу action_category и action_tag

        $action->categories()->sync($request->categories);
       
        $action->tags()->sync($request->tags);

         
        return redirect()->route('admin.actions');
    }

    public function delete($id = null)
    {
        $action = Action::findOrFail($id)->delete();

        return redirect()->route('admin.actions');
    }
}
