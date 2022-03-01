<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Film;
use Illuminate\Support\Facades\Redirect;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
        $films = Film::get();
        return view('index',compact('films'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request->name;
        $desc = $request->desc;

        $newFilm = new Film();
        $newFilm->name = $name;
        $newFilm->desc = $desc;
        $newFilm->save();

        return redirect('/films/'.$newFilm->id);

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
        $film = Film::where('id', '=', $id)->first();
        return view('show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $film = Film::where('id', '=', $id)->first();
        return view('edit', compact('film'));
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
        //
        $film = Film::where('id','=', $id)->first();
        $film->name = $request->name;
        $film->desc = $request->desc;
        $film->save();

        return Redirect('/films/'.$film->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $film = Film::where('id','=', $id);
        $film->delete();

        return redirect('/films');
    }
    public function search()
    {
        //
        return view('search');

    }
    public function searchres(Request $request)
    {
        //
        $search = $request->search;
        $films = Film::where('name','like','%'.$search.'%')->get();

        return view('index',compact('films'));


    }

}
