<?php

namespace App\Http\Controllers\Api\NoteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class ReadNoteByIdController extends Controller
{
    /**
     * Retrieve a specific note by its ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the note by its ID
        $note = Note::findOrFail($id);

        // Return the note as a JSON response
        return response()->json(['note' => $note], 200);
    }
}
