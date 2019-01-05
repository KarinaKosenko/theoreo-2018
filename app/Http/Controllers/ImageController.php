<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    		'page' => 'adminlte.parts.action_create',
    		'h1' => '',
    		
    	]);
    }

    public function imageCropPost(Request $request)
    {
        $data = $request->image;
        //dump($data);
       
        list($data) = explode(';', $data);
        list(, $data)      = explode(',', $data);


        $data = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/storage/uploads/" . $image_name;


        file_put_contents($path, $data);


        return response()->json(['success'=>'done']);
    }
 
    public function imageDbSave(Request $request)
    {

    	$path = $request->file('image')->store('uploads', 'public');


	    $input = $request->all();
		$input['size'] = $request->image->getSize();
	    $input['ext'] = $request->image->getClientOriginalExtension();
	    $input['path'] = $path;
	 	$input['old_name'] = $request->image->getClientOriginalName();
	 	
		Upload::create($input);

    }
}
