<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\ViewNotFoundSolutionProvider;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //passiamo i dati alla pagina principale
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //indirizziamo alla pagina create.blade.php
        return view('comics.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {
        //dati da salvare
        $data = $request->all();

        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        //salviamo i dati
        $comic->save();
        //reindiriziamo alla pagina principale
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tramite id mostriamo la pagina show.blade.php con i dati del comic tramite id
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */              passiamo i dati dei comics
    public function edit(Comic $comic)
    {
        // mostriamo la pagina edit.blade.php 
        return view('comics.edit', compact('comic'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        //salviamo i dati
        $comic->save();

        //reindiriziamo alla pagina principale
        return redirect()->route('comics.index');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {

    // }
}
