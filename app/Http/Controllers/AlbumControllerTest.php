<?php

namespace App\Http\Controllers;

use Barryvanveen\Lastfm\Constants;
use Barryvanveen\Lastfm\Lastfm;
use App\Http\Requests\AlbumStoreRequest;
use App\Http\Resources\AlbumResource;
use App\Models\Album;
use GuzzleHttp\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumControllerTest extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $album_list = DB::table('albums')->paginate(3);
        return view('main', compact('album_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('albumForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AlbumStoreRequest $request
     * @return AlbumResource|RedirectResponse
     */
    public function store(AlbumStoreRequest $request)
    {
        dump($request);
        $album = new Album();
        $album->name = $request->input('name');
        $album->author = $request->input('author');
        $album->description = $request->input('description');
        $album->image_url = $request->file('image')->store('images', 'public');
        $album->save();
        return redirect()->route('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Album $album
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('albumForm', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return AlbumResource|RedirectResponse
     */
    public function update(Request $request, Album $album)
    {
        $album->update($request->only('name', 'author', 'description'));
        if (!is_null($request->input('image_url'))) {
            $album->image_url = $request->file('image')->store('images', 'public');
        }
        return redirect()->route('main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Album $album
     * @return RedirectResponse
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('main');
    }
}
