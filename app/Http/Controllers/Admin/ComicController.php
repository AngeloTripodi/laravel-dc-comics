<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->validate(
            [
                'title' => 'required|max:120|min:2',
                'thumb' => 'max:255|min:2|url',
                'price' => 'max:10|min:3|required',
                'series' => 'max:80|min:2',
                'sale_date' => 'date_format:Y-m-d',
                'type' => 'max:60|min:2'
            ],
            [
                'title.required' => 'Il campo Title è obbligatorio.',
                'title.min' => 'Inserire almeno 2 caratteri nel campo Title',
                'title.max' => 'Inserire massimo 255 caratteri nel campo Title',
                'thumb.required' => 'Il campo Thumb è obbligatorio.',
                'thumb.url' => 'Non hai inserito un link valido nel campo Thumb, riprovare',
                'thumb.min' => 'Inserire almeno 2 caratteri nel campo Thumb',
                'thumb.max' => 'Inserire massimo 255 caratteri nel campo Thumb',
                'price.min' => 'Inserire almeno 3 caratteri nel campo Price',
                'price.max' => 'Inserire massimo 10 caratteri nel campo Price',
                'price.required' => 'Il campo Price è obbligatorio.',
                'series.min' => 'Inserire almeno 2 caratteri nel campo Series',
                'series.max' => 'Inserire massimo 80 caratteri nel campo Series',
                'series.required' => 'Il campo Series è obbligatorio.',
                'sale_date.date_format' => 'Non hai inserito una data valida nel campo Sale Date, si prega di riprovare.',
                'type.min' => 'Inserire almeno 2 caratteri nel campo Type',
                'type.max' => 'Inserire massimo 60 caratteri nel campo Type',

            ]
        );

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('admin.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
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
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('admin.comics.show', $comic->id);
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
        return redirect()->route('admin.comics.index');
    }
}
