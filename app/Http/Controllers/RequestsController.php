<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RequestsController extends Controller
{
    public function index(){
        return view('requests.index',[
            'user' => Auth::user(),
            'requests' => \App\Models\Request::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    public function update(Request $request){
        $req = \App\Models\Request::find($request->input('id'));
        $req->accepted = true;

        try{
            $req->save();
            return redirect('/requests');
        }
        catch(Exception $e){
            $message = "Er is iets fout gegaan. Probeer het later opnieuw.";
            return redirect('/requests')->withErrors([$message]);
        }
    }

    public function destroy(Request $request){
        $req = \App\Models\Request::find($request->input('id'));

        try{
            $req->delete();
            return redirect('/requests');
        }
        catch(Exception $e){
            $message = "Er is iets fout gegaan. Probeer het later opnieuw.";
            return redirect('/requests')->withErrors([$message]);
        }
    }
    
    public function create($id){
        return view('requests.create',[
            'user' => Auth::user(),
            'receiver' => \App\Models\User::find($id),
            'sender' => Auth::user(),
        ]);
    }

    public function store(Request $request, \App\Models\Request $req){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $req->user_id = $request->input('user_id');
        $req->name = $validated['name'];
        $req->email = $validated['email'];
        $req->phone_number = $validated['phone_number'];
        $req->title = $validated['title'];
        $req->description = $validated['description'];

        try{
            $req->save();
            return redirect('/');
        }
        catch(Exception $e){
            $message = "Er is iets fout gegaan. Probeer het later opnieuw.";
            return redirect('/pets/create')->withErrors([$message]);
        }
    }
}