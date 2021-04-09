<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ReviewsController extends Controller
{
    public function create($id){
        return view('reviews.create', [
            'user' => Auth::user(),
            'reviewed' => \App\Models\User::where('email', \App\Models\Request::find($id)->email)->first(),
        ]);
    }

    public function store(Request $request, \App\Models\Review $review){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'rating' => 'required',
        ]);

        $review->user_id = $request->input('user_id');
        if($request->input('name')){
            $review->name = $request->input('name');
        } else {
            $review->name = "Anoniem";
        }
        $review->title = $validated['title'];
        $review->description = $validated['description'];
        $review->rating = $validated['rating'];

        try{
            $review->save();
            return redirect('/requests');
        }
        catch(Exception $e){
            $message = "Er is iets fout gegaan. Probeer het later opnieuw.";
            return redirect('/pets/create')->withErrors([$message]);
        }
    }
}
