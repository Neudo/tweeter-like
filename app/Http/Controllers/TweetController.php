<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TweetController extends Controller
{
    // Create

    public function create(Request $request)
    {
        var_dump($request->message);

        $validated = $request->validate([
            'message' => 'required|min:15|max:180'
        ]);


        $tweet = new Tweet();
        $tweet->message = $request->message;
        $tweet->user_id = auth()->id();
        $tweet->save();
        return redirect('tweets')->with('status', 'Message envoyé !');
    }

    // Show

    public function show()
    {
        $tweets =  Tweet::All();
        return view('timeline', compact('tweets'));
    }

    public function delete(Tweet $tweet)
    {
        $tweet->delete();
        return redirect('tweets')->with('status', 'Tweet  supprimé');
    }


}
