<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create(Request $request) {
        // $request->validate([
        //     'rating' => 'required|integer|min:1|max:5',
        //     'comment' => 'required|string|min:10|max:255',
        //     'user_id' => 'required|integer|exists:users,id'
        // ]);
        // return response()->json($request->all());
        $feedback = Feedback::create([
            'user_id' => $request->user_id,
            'rating' => $request->rating,
            'comment' => $request->comment
        ]);
        return response()->json($feedback, 201);
    }
}
