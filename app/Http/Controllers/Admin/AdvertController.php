<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Advert;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = Advert::orderBy('id', 'DESC')->paginate(10);
        return view('admin.advert.index', compact('adverts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advert.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advert = Advert::create($request->all());
        //files 
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('ads', $request->file('file'));
            $advert->fill(['file' => asset($path)])->save();
        }

        \Session::flash('info', 'Anuncio Guardado con exito');
        return redirect()->route('advert.index', [$advert->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advert = Advert::find($id);
        return view('admin.advert.show', compact('advert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advert = Advert::find($id);
        return view('admin.advert.edit', compact('advert'));
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
        $advert = Advert::find($id);
        $advert->fill($request->all())->save();
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('ads', $request->file('file'));
            $advert->fill(['file' => asset($path)])->save();
        }
        \Session::flash('info', 'Anuncio Modificado con exito');
        return redirect()->route('advert.edit', $advert->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advert = Advert::find($id)->delete();
        \Session::flash('info', 'Anuncio Eliminado con exito');
        return back();
    }
}
