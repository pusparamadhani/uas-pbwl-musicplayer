<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Track;
use App\Album;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracks = Track::all();
        return view('track.tampil', compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $albums = Album::all();
         return view('track.add', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'track_name' =>'required'
        ]);
        
         Track::create($request->all());
         return redirect('track')->with('status', 'Data Track Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tracks = Track::findOrFail($id);
        $albums= Album::all();
        return view('track.edit', compact('tracks', 'albums'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         Track::where('track_id', $tracks->track_id)
        ->update([
            'track_name' => $request->track_name,
            'track_id_album' => $request->track_id_album,
            'track_time' => $request->track_time,
            'track_file' => $request->track_file,
        ]);
        return redirect('track')->with('status', 'Data Track Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tracks = Track::findOrFail($id);
         $tracks->delete();

        return redirect('track')->with('status', 'Data Track Berhasil Dihapus'); 
    }
}
