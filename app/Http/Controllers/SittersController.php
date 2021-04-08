<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SittersController extends Controller
{
    public function index(){
        return view('sitters.index',[
            'user' => Auth::user(),
            'sitters' => \App\Models\User::where('role', 'Sitter')->get(),
        ]);
    }

    public function show($id){
        return view('sitters.show',[
            'user' => Auth::user(),
            'sitter' => \App\Models\User::find($id),
            'reviews' => \App\Models\Review::where('user_id', $id)->get(),
            'images' => \App\Models\Image::where('user_id', $id)->get(),
        ]);
    }}
