<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function show(){
        return view('users.profile', [
            'user' => Auth::user(),
            'pets' => \App\Models\Animal::where('owner_id',  Auth::user()->id)->get(),
            'images' => \App\Models\Image::where('user_id',  Auth::user()->id)->get(),
        ]);
    }

    public function edit(){
        return view('users.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required',
            'phone_number' => 'required|max:10|not_regex:/[a-z]/',
            'description' => 'required|max:500',
        ]);
        
        $user->name = $validated['name'];
        $user->phone_number = $validated['phone_number'];
        $user->description = $validated['description'];

        if($request->file('profile_picture')){
            $user->profile_picture = 'data:image/' . $request->file('profile_picture')->getClientOriginalExtension() . ';base64,' . base64_encode(file_get_contents($request->file('profile_picture')));
        } else {
            $user->profile_picture = Auth::user()->profile_picture;
        }

        try{
            $user->save();
            return redirect('/profile');
        }
        catch(Exception $e){
            $message = "Er is iets fout gegaan. Probeer het later opnieuw.";
            return redirect('/profile/edit')->withErrors([$message]);
        }
    }
}
