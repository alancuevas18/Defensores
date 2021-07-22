<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Economy;

class EconomyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $economies = Economy::orderBy('id', 'DESC')->paginate(10);
        return view('admin.economies.index', compact('economies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condition = ['sube', 'igual', 'baja'];
        $names = 
        [
            'Dolar Venta', 
            'Dolar Compra', 
            'Euro Venta', 
            'Euro Compra', 
            'Gasolina Premiun',
            'Gasolina Regular',
            'Diesel Premiun',
            'Diesel Regular',
            'Gas Propano',
            'Gas Natural',
        ];
        return view('admin.economies.create', compact('condition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Economy = Economy::create($request->all());
        \Session::flash('info', 'Categoria Guardada con exito');
        return redirect()->route('economies.index', [$Economy->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $economy = Economy::find($id);
        return view('admin.economies.show', compact('economy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Economy = Economy::find($id);
        return view('admin.economies.edit', compact('Economy'));
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
        $Economy = Economy::find($id);
        $Economy->fill($request->all())->save();
        \Session::flash('info', 'Categoria Modificada con exito');
        return redirect()->route('economies.index', $Economy->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Economy = Economy::find($id)->delete();
        \Session::flash('info', 'Categoria Eliminada con exito');
        return back();
    }
}
