<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Facades\JWTAuth;
// use Illuminate\Support\Facades\Auth;



class NoteController extends Controller
{
    public function notes(Request $request)
    {
        return view('notes');
    }

    public function insertNote(Request $request)
    {
        $this->validate($request, [
            'note' => 'required|unique:notes',
        ]);

        DB::table('notes')->insert([
            'note' => $request->note
        ]);

        $response = ["status" => "Success"];
        return response(json_encode($response), 201, ["Content-Type" => "application/json"]);

    }

    public function getNotes()
    {
        $notes = DB::table('notes')->orderBy('noteId', 'DESC')->get();

        $response = ["status" => "Success", "data"=> $notes];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);

    }

    public function deleteNote($noteId)
    {
        DB::table('notes')->where('noteId', $noteId)->delete();
        $response = ["status" => "Success"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);

    }

    public function updateNote(Request $request)
    {
        $this->validate($request, [
            'note' => 'required|unique:notes,note,'.$request->noteId.',noteId',
        ]);

        DB::table('notes')->where('noteId', $request->noteId)->update([
            'note' => $request->note
        ]);
        $response = ["status" => "Success"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }
}
