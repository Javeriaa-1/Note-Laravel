<?php

namespace App\Http\Controllers\Api\NoteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class DeleteNoteByIdController extends Controller
{
    /**
     * Delete a specific note by its ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Retrieve the note by its ID
        $note = Note::findOrFail($id);

        // Delete the note
        $note->delete();

        // Return a JSON response indicating successful deletion
        return response()->json(['message' => 'Note deleted successfully'], 200);
    }
}
