<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function view() {
        $album_list = DB::table('albums')->paginate(3);
        return view('main', compact('album_list'));
    }
}
