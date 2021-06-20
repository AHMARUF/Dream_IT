<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Dncrypt;
use App\Gallery;
class GalleryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$Gallery = Gallery::all();
    	return view('backend.portfolio.all',compact('Gallery'));
    }

    public function create()
    {
    	return view('backend.portfolio.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        /*'name' => 'required', */ 
        'images' => 'required|mimes:jpeg,-=,png,gif|max:2048'
    ]);
        $data= new Gallery;
        $data['title']=$request->title;
        $data['cat_id']=$request->cat_id;
        $data['description']=$request->description;
        $data['publication_status']=$request->publication_status;
        $images=$request->file('images');
        if ($images) 
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($images->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='asset/img/portfolio/';
            $image_url=$upload_path.$image_full_name;
            $success=$images->move($upload_path,$image_full_name);
            $data['images']=$image_url;
            $data->save();

            $notification = array(
                'message' => 'Successfully ADD Student',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);  
        }else{
             $data->save();
            //echo "success";

            $notification = array(
                'message' => 'Pleace Try agin',
                'alert-type' => 'success'
            );

          return Redirect()->back()->with($notification);   
        }
        
    }


    public function eidt($id)
    {
        $id=Crypt::decryptString($id);
        $Gallery=Gallery::find($id);
        return view('backend.portfolio.eidt',compact('Gallery'));
    }


    public function update(Request $request, $id)
    {
        $data=Gallery::find($id);
        $data['title']=$request->title;
        $data['cat_id']=$request->cat_id;
        $data['description']=$request->description;
        $images=$request->file('images');
        if ($images) 
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($images->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='asset/img/portfolio/';
            $image_url=$upload_path.$image_full_name;
            $success=$images->move($upload_path,$image_full_name);
            $data['images']=$image_url;
            unlink($request->old_photo);
            $data->save();

            $notification = array(
                'message' => 'Successfully update',
                'alert-type' => 'success'
            );
            return Redirect()->route('/Galleryall')->with($notification);  
        }else{
            $data['images']=$request->old_photo;
            $data->save();
            //echo "success";

            $notification = array(
                'message' => 'Successfully update! ',
                'alert-type' => 'success'
            );

          return Redirect()->route('/Galleryall')->with($notification);   
        }
    }

    public function active($id)
    {
        $id=Crypt::decryptString($id);
        $data=Gallery::find($id); 
        $data['publication_status']= 1;
        $data->save();
        if ($data) {
             $notification = array(
                'message' => 'Successfully update',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);  
        }
        else{
            $notification = array(
                'message' => 'Pleace Try agin',
                'alert-type' => 'denger'
            );

          return Redirect()->route()->with($notification);  
        }
    } 


    public function unactive($id)
    {
        $id=Crypt::decryptString($id);
        $data=Gallery::find($id); 
        $data['publication_status']= 0;
        $data->save();
        if ($data) {
             $notification = array(
                'message' => 'Successfully update',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);  
        }
        else{
            $notification = array(
                'message' => 'Pleace Try agin',
                'alert-type' => 'denger'
            );

          return Redirect()->route()->with($notification);  
        }
    }

    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $delete=Gallery::find($id); 
        $image=$delete->images;
        $delete->delete();
   
        if ($delete) {
            unlink($image);
            $notification = array(
                'message' => 'Successfully  Deleted! ',
                'alert-type' => 'success'
            );

          return Redirect()->back()->with($notification); 
        }
    }


}
