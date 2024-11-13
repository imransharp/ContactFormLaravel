<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function create()
    {
        return view('messages.create');
    }

     // Store a new item in the database
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'description' => 'required|string',
         ]);
 
         Message::create([
             'name' => $request->name,
             'description' => $request->description,
         ]);
 
         return redirect()->route('message.create')->with('success', 'Message added successfully.');
     }
}
