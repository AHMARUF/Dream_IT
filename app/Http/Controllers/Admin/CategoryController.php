<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Dncrypt;
use App\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$portfolio = Category::all();
    	return view('backend.portfolio.all_cat',compact('portfolio'));
    }

    public function create()
    {
    	return view('backend.portfolio.add_cat');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'title' => 'required'
    ]);
        $data= new Category;
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['publication_status']=$request->publication_status;
        $images=$request->file('images');
        $data->save();
        if($data){
            $notification = array(
                'message' => 'Successfully ADD Student',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);  
        }else{
            /* $data->save();*/
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
        $portfolio=Category::find($id);
        return view('backend.portfolio.eidt_cat',compact('portfolio'));
    }


    public function update(Request $request, $cat_id)
    {
        $data=Category::find($cat_id);
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data->save();
        if ($data) 
        {
            $notification = array(
                'message' => 'Successfully update',
                'alert-type' => 'success'
            );
            return Redirect()->route('/Categoryall')->with($notification);  
        }else{
            //echo "success";

            $notification = array(
                'message' => 'Successfully update! ',
                'alert-type' => 'success'
            );

          return Redirect()->route('/Categoryall')->with($notification);   
        }
    }

    public function active($id)
    {
        $id=Crypt::decryptString($id);
        $data=Category::find($id); 
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
        $data=Category::find($id); 
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

    public function destroy($cat_id)
    {
        $cat_id=Crypt::decryptString($cat_id);
        $delete=Category::find($cat_id); 
        $delete->delete();
   
        if ($delete) {
            $notification = array(
                'message' => 'Successfully  Deleted! ',
                'alert-type' => 'success'
            );

          return Redirect()->back()->with($notification); 
        }
    }
}
