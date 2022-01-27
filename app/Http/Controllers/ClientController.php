<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function createClient(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
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
        $client = new Client();
        $client->title = $request->title;
        $client->image = $image_name;
        $client->save();
        return back()->with('client_created', 'Client has been created successfully!');
    }

    public function getClient()
    {
        $client = Client::orderBy('id', 'DESC')->get();
        return view('clients', compact('client'));
    }

    public function getClientById($id)
    {
        $client = Client::where('id', $id)->first();
        return view('\Backend\Content\Client\view-client', compact('client'));
    }

    public function deleteClient($id)
    {
        Client::where('id', $id)->delete();
        return back()->with('client_deleted', 'Client has been deleted successfully');
    }


    public function editClient($id)
    {
        $client = Client::find($id);
        return view('\Backend\Content\Client\edit-client', compact('client'));
    }

    public function updateClient(Request $request)
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
        $client = Client::find($request->id);
        $client->title = $request->title;
        $client->image = $image_name;
        $client->save();
        return redirect('client')->with('client_updated', "Client has been updated successfully");

    }
}
