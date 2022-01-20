<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index",compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated_data = $request->validate([
            'title' => 'required|unique:comics',
            'description' => 'nullable',
            'series' => 'nullable',
            'price' => 'nullable',
        ]);

        Comic::create($validated_data);


        /*$comic = new comic();
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->series = $request->series;
        $comic->price = $request->price;
        $comic->save();*/

        return redirect()->route('comics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validated_data = $request->validate([
            'title' => 'required|unique:comics',
            'description' => 'nullable',
            'series' => 'nullable',
            'price' => 'nullable',
        ]);

        $comic->update($validated_data);


        return redirect()->route('comics.index')->with('message', '🥳 Complimenti hai modificato il post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics")->with('message', '😱 Hai rimosso un post per sempre!! Sei fregato!');;
    }
}
