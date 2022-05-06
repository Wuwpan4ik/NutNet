<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    public function create(Request $request)
    {

        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'string|required|max:32',
                'author' => 'string|required|max:32',
                'description' => 'string|required',
            ]);
            $album = new Album();
            $album->name = $request->input('name');
            $album->author = $request->input('author');
            $album->description = $request->input('description');
            $album->image_url = $request->file('image')->store('images', 'public');
            $album->save();

            Log::info('User create new Album with id = '. $album->id);

            return redirect()->route('main');
        } else {
            return view('albumAdd');
        }
    }


    public function remove(Request $request)
    {
        $album = Album::find($request->input('id'));
        $album->delete();
        return redirect()->route('main');
    }


    public function edit(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'string|required|max:32',
                'author' => 'string|required|max:32',
                'description' => 'string|required',
            ]);

            Log::info('Album with id = '. $request->input('id') . 'was been removed');

            $album = Album::find($request->input('id'));
            $album->name = $request->input('name');
            $album->author = $request->input('author');
            $album->description = $request->input('description');

            if (!is_null($request->input('image_url'))) {
                $album->image_url = $request->file('image')->store('images', 'public');
            }

            $album->save();
            return redirect()->route('main');
        } else {
            $album = Album::find($request->input('id'));
            return view('albumEdit', compact('album'));
        }
    }
}
