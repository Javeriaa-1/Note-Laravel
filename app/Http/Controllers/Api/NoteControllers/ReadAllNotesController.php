<?php

namespace App\Http\Controllers\Api\NoteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class ReadAllNotesController extends Controller
{
    /**
     * Display a listing of the notes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all notes from the database
        $notes = Note::all();
        
        // Return the notes as a JSON response
        return response()->json(['notes' => $notes], 200);
    }
}
