<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NoteControllers\CreateNoteController;
use App\Http\Controllers\Api\NoteControllers\ReadAllNotesController;
use App\Http\Controllers\Api\NoteControllers\ReadNoteByIdController;
use App\Http\Controllers\Api\NoteControllers\DeleteNoteByIdController;
use App\Http\Controllers\Api\NoteControllers\UpdateNoteByIdController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// notes routes
Route::post('/notes', [CreateNoteController::class, 'store']);
Route::get('/notes', [ReadAllNotesController::class, 'index']);
//Make a dynamic route to read note by id
Route::get('/notes/{id}', [ReadNoteByIdController::class, 'show']);
//Make a dynamic route to delete note by id
Route::delete('/notes/{id}', [DeleteNoteByIdController::class, 'destroy']);
//Make a dynamic route to update note by id
Route::put('/notes/{id}', [UpdateNoteByIdController::class, 'update']);