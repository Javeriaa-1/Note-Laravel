<?php

namespace App\Http\Controllers\Api\NoteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class UpdateNoteByIdController extends Controller
{
    /**
     * Update a specific note by its ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Retrieve the note by its ID
        $note = Note::findOrFail($id);

        // Update the note's title and description
        $note->title = $request->title;
        $note->description = $request->description;

        // Save the updated note
        $note->save();

        // Return a JSON response with the updated Note
        return response()->json(['note' => $note], 200);
    }
}
