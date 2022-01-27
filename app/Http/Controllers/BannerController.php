<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function createBanner(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|nullable'
        ]);
        //handle file upload

        //for deleting image use unlink() function.
        //for storing image

        if ($request->hasFile('image')) {
            //getting file name with the extension
            $image_extension = $request->image->getClientOriginalExtension();
            $image_name = rand(11111, 99999) . "." . $image_extension;
            $path = public_path() . '/uploads/';
            $image_move = $request->image->move($path, $image_name);
        } else {
            $image_name = 'noimage.jpg';
        }
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->body = $request->body;
        $banner->image = $image_name;
        $banner->save();
        return back()->with('banner_created', 'Banner has been created successfully!');
    }

    public function getBanner()
    {
        $banner = Banner::orderBy('id', 'DESC')->get();
        return view('banners', compact('banner'));
    }

    public function getBannerById($id)
    {
        $banner = Banner::where('id', $id)->first();
        return view('\Backend\Content\Banner\view-banner', compact('banner'));
    }

    public function deleteBanner($id)
    {
        $banner = Banner::find($id);
        $image_path = '/uploads/' . $banner->image_name;
        if(File::exists($image_path)){
            File::delete($image_path);
        }
        $banner->delete();
        return back()->with('banner_deleted', 'Banner has been deleted successfully');
    }


    public function editBanner($id)
    {
        $banner = Banner::find($id);
        return view('\Backend\Content\Banner\edit-banner', compact('banner'));
    }

    public function updateBanner(Request $request)
    {
        if ($request->hasFile('image')) {
            //getting file name with the extension
            $image_extension = $request->image->getClientOriginalExtension();
            $image_name = rand(11111, 99999) . "." . $image_extension;
            $path = public_path() . '/uploads/';
            $image_move = $request->image->move($path, $image_name);
        } else {
            $image_name = 'noimage.jpg';
        }


        $banner = Banner::find($request->id);
        $banner->title = $request->title;
        $banner->body = $request->body;
        $banner->image = $image_name;
        $banner->save();
        return redirect('banner')->with('banner_updated', "Banner has been updated successfully");

    }
}
