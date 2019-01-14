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
        $image = session('image');
        $image_src = session('image_src');
        if ($image) {
            $image_id = $image->id;
            $image_path = $image->path;
        }
        return view('adminlte.layouts.primary', [
            'page' => 'adminlte.parts.action_create',
            'h1' => 'Добавление акции',
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'cities' => City::all(),
            'tags' => Tag::all(),
            'image_id' => $image_id ?? '',
            'image_path' => $image_path ?? '',
            'image_src' => $image_src ?? ''
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {	
        $image_src = session('image_src');

        // Сохраняем акцию в базу

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
        $action = Action::findOrFail($id);

        $actionCategoryCollection = ActionCategory::where('action_id', $id)->get();

        foreach ($actionCategoryCollection as $item) {
            $actionCategoryArray[] = $item->category_id;
        }

        $actionTagCollection = ActionTag::where('action_id', $id)->get();

        foreach ($actionTagCollection as $item) {
            $actionTagArray[] = $item->tag_id;
        }

        $image = session('image');
        $image_src = session('image_src');
        if ($image) {
            $image_id = $image->id;
            $image_path = $image->path;
        }

         return view('adminlte.layouts.primary', [
            'page' => 'adminlte.parts.action_edit',
            'h1' => 'Редактирование акции',
            'action' => $action,
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'cities' => City::all(),
            'tags' => Tag::all(),
            'actionCategoryArray' => $actionCategoryArray ?? [],
            'actionTagArray' => $actionTagArray ?? [],
            'image_id' => $image_id ?? $action->upload->id,
            'image_path' => $image_path ?? '',
            'image_src' => $image_src ?? 'this_img'

        ]); 
    }

    public function update(Request $request, $id = null)
    {
        $action = Action::findOrFail($id);
        
        $image = session('image');
        $image_src = session('image_src');

        $action->name = $request->name;
        $action->brand_id = $request->brand;
        $action->city_id = $request->city;
        $action->active_from = $request->active_from;
        $action->active_to = $request->active_to;
        $action->text = $request->text;
        $action->links = $request->links;
        $action->upload_id = $request->image_id;
        $action->status = "approved";
        $action->type = $request->type;
        $action->save();

        // Сохраняем в таблицу action_category

        $request_categories_id = $request->categories;

        $old_categories = ActionCategory::where('action_id', $action->id)->get();
        $old_categories_id = [];

        $categories_id_to_add = [];
       
        foreach ($old_categories as $item) {

            $old_categories_id[] = $item->category_id;

            if (in_array($item->category_id, $request_categories_id)) {  // если старая категория есть в реквесте
                
                $categories_id_to_add[] = $item->category_id; 
          
            } else {                                                    // если старую категорию при редактировании убрали
                $category_to_del = ActionCategory::where(['action_id' => $action->id, 'category_id' => $item->category_id])->delete();
            }
        }

        foreach ($request_categories_id as $item) {
            if (!in_array($item, $old_categories_id)) {
                $categories_id_to_add[] = $item;
            }
        }
        
        foreach ($categories_id_to_add as $category_id) {
            $action_category = ActionCategory::firstOrCreate([
                'action_id' => $action->id,
                'category_id' => $category_id
            ]);
        }

         // Сохраняем в таблицу action_tag

         $tag_to_del = ActionTag::where('action_id', $action->id)->delete();

         $request_tags_id = $request->tags;

         foreach ($request_tags_id as $item) {
            $action_tag = ActionTag::create([
                'action_id' => $action->id,
                'tag_id' => $item
            ]);
         }
    
        return redirect()->route('admin.actions');
    }

    public function delete($id = null)
    {
        $action = Action::findOrFail($id)->delete();

        return redirect()->route('admin.actions');
    }
}
