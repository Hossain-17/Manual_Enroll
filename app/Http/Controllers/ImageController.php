<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;

class ImageController extends Controller
{
    public function index(){
        $images = ImageModel::all();

        return view('admin.pages.image_upload',['images'=>$images]);
    }

    public function store(Request $req){
            if ($req->file('picture')){
                $i=0;
                foreach($req->file('picture') as $image){
                    $imageName = $this->uploadImage($image,$i); 
                    $obj = new ImageModel();
                    $obj ->filename = $imageName;
                    $obj->save();
                    $i++;
                }
                return redirect()->back()->with('msg','Successfully Uploaded');
                // $originalImage = $req->file('picture');
                // $imageName = $this->uploadImage($originalImage); 
                // $obj = new ImageModel();
                // $obj ->filename = $imageName;
                // if($obj->save()){
                //     return redirect()->back()->with('msg','Successfully Uploaded');
                // }
        }
    }

    private function uploadImage($originalImage,$i)
    {
        $profileImage    = Image::make($originalImage);

        $tmp             = $originalImage->getClientOriginalName();
        $ext2            = explode(".", $tmp);
        $ext             = end($ext2);
        $imageName       = time().$i.'.'.$ext;
        // local
        $path            = public_path().'/uploads/original/';
        // deployment
        // $path          = base_path().'/../'.'uploads/';
            
        $profileImage->save($path.$imageName);
        return $imageName;
    }

}

// $thumbnailImage = Image::make($originalImage);
// $thumbnailPath = public_path().'/thumbnail/';



// $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
// $thumbnailImage->resize(150,150);

    // $originalPath = public_path().'/uploads/original/';
                // $originalImage->save($originalPath.time().$originalImage->getClientOriginalName()); 

                // $imagemodel= new ImageModel();
                // $imagemodel-> filename = time().$originalImage->getClientOriginalName();
                // $imagemodel-> save();