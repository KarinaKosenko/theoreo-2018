<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Action;
use App\Models\City;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ActionCategory;
use App\Models\ActionTag;

class BrandController extends Controller

{
    public function index(){


//$brands = Brand::orderby('id', 'DESC')->get();
   
  $brands = Brand::all();
      
     return view('adminlte.layouts.primary', [

            'page' => 'adminlte.pages.brands',
            'title' => 'Theoreo | Административная панель',
            'brands'=> $brands
        ]);


     
      }



      public function create()
  {

    $brands = Brand::all();

    return view('adminlte.layouts.primary', [

            'page' => 'adminlte.pages.brandsCreate',
            'title' => 'Theoreo | Административная панель',
            'brands'=> $brands
        ]);

    
  }

     public function edit($id = null )
  {
  //	dump($id);

  	// $brands = Brand::findOrFail($id);

  	  $brands = Brand::find($id);
  	   //$brands = Brand::all();

       //$brands = Brand::find($id);
     //  dump( $brands);
       dump($brands);
       // echo $brands;
      // $brands = Brand::all();

    return view('adminlte.layouts.primary', [

            'page' => 'adminlte.pages.brandsEdit',
            'title' => 'Theoreo | Административная панель',
            'brands'=> $brands
        ]);

    
  }



     public function store(Request $request)
  {
    // Проверка запроса...

    $brand = new Brand;

   // $brand->name = $request->name;
    $brand = $request->all();

    dump($brand);
  }



}
