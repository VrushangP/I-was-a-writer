<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /*
    ======================================================================
    ||                         Anime Functions                           ||
    ======================================================================
    */
    public function getRowById(int $id) {
        // Assuming 'id' is the name of the primary key column in your table
        $row = Anime::find($id);

        if ($row) {
            // Record found, you can access the attributes like $row->column1, $row->column2, etc.
            return response()->json($row);
        } else {
            // Record not found
            return response()->json(['error' => 'Record not found'], 404);
        }
    }

    public function hi() {
        return response()->json([
            'message' => 'Anime not found.'
        ], 404);
    }

    // private function getAnime(string $anime_name) {
    //     if()
    // }

}