<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function index(){
        return view('home',[
            'user' => Auth::user(),
            'pets' => \App\Models\Animal::all(),
            'sitters' => \App\Models\User::where('role', 'Sitter')->get(),
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
