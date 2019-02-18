<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Upload;
 

class ImageController extends Controller
{
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageCrop()
    {
        return view('adminlte.layouts.primary', [
    		'page' => 'adminlte.pages.action_create',
    		'h1' => '',
    		
    	]);
    }

    public function imageCropPost(Request $request)
    {
        $data = $request->image;
         
         // не работает ниже     

        list($data) = explode(';', $data);
       // list(, $data) = explode(',', $data);

        $data = base64_decode($data);
        $image_name= time().'.png';
        $path = "storage/uploads/" . $image_name;
        file_put_contents($path, $data);

        return response()->json(['success'=>'done']);
    }
 

    public function imageDbSave(Request $request)
    { 
    	$image_src = $request->image_src;
    	$link = $request->link;
    	if ($image_src == 'brand_img') {
    	
    		// нужно получить значение тега select ("Бренд") из вкладки "Основное"" и передать его во вкладку "Изображение" без POST-запроса
    	} 

    	else if ($image_src == 'upload_img' && $request->hasFile('image')) {

	    	$path = $request->file('image')->store('uploads', 'public');
		    $input = $request->all();
			$input['size'] = $request->image->getSize();
		    $input['ext'] = $request->image->getClientOriginalExtension();
		    $input['path'] = $path;
		 	$input['old_name'] = $request->image->getClientOriginalName();
		 	$image = Upload::create($input);
		 }

		 else if ($image_src == 'internet_img') {

			$file = file_get_contents($link);
			$file_name = time().".png";
			file_put_contents("storage/uploads/".$file_name, $file);

			$path = "uploads/".$file_name;
			$ext = "png";
			$size = filesize("storage/".$path);
			
			$image = Upload::create([
				'path' => $path,
				'ext' => $ext,
				'size' => $size,
				'old_name' => $file_name
			]);
		}

		else {

			$image = '';
		}
	
		return response()->json(['success' => true, 'data' => ['image'=> $image, 'image_src'=> $image_src]]);
		//return redirect()->back()->with(['image'=> $image, 'image_src'=> $image_src]);
	}
}
