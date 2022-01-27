<?php

namespace App\Http\Controllers;

use App\Models\Enhances;
use Illuminate\Http\Request;

class EnhancesController extends Controller
{
    public function createEnhances(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        if ($request->hasFile('image')) {
            //getting file name with the extension
            $image_extension = $request->image->getClientOriginalExtension();
            $image_name = rand(11111, 99999) . "." . $image_extension;
            $path = public_path() . '/uploads/';
            $image_move = $request->image->move($path, $image_name);
        } else {
            $image_name = 'noimage.jpg';
        }

        $enhances = new Enhances();
        $enhances->title = $request->title;
        $enhances->body = $request->body;
        $enhances->description = $request->description;
        $enhances->image = $image_name;
        $enhances->save();
        return back()->with('enhances_created', 'Enhances has been created successfully!');
    }

    public function getEnhances()
    {
        $enhances = Enhances::orderBy('id', 'DESC')->get();
        return view('enhancess', compact('enhances'));
    }

    public function getEnhancesById($id)
    {
        $enhances = Enhances::where('id', $id)->first();
        return view('\Backend\Content\Enhances\view-enhances', compact('enhances'));
    }

    public function deleteEnhances($id)
    {
        Enhances::where('id', $id)->delete();
        return back()->with('enhances_deleted', 'Enhances has been deleted successfully');
    }


    public function editEnhances($id)
    {
        $enhances = Enhances::find($id);
        return view('\Backend\Content\Enhances\edit-enhances', compact('enhances'));
    }

    public function updateEnhances(Request $request)
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

        $enhances = Enhances::find($request->id);
        $enhances->title = $request->title;
        $enhances->body = $request->body;
        $enhances->description = $request->description;
        $enhances->image = $image_name;
        $enhances->save();
        return redirect('enhances')->with('enhances_updated', "Enhances has been updated successfully");

    }
}
