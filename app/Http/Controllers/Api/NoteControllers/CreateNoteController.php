<?php

namespace App\Http\Controllers\Api\NoteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class CreateNoteController extends Controller
{
    /**
     * Store a newly created note in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new Note instance
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;

        // Save the Note
       $note->save();

        // Return a JSON response with the newly created Note and status code 201 (Created)
        return response()->json(['note' => $note], 201);
    }
}

