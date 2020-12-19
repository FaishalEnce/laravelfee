<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produksis=Produksi::all(); // select * from produksi

        return view('Produksi.index', compact('produksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        Produksi::create($input); // insert into ... ... 

        return redirect()->route('produksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produksi=Produksi::find($id);

        return view('produksi.show',compact('produksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Produksi $produksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produksi $produksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $produksi=Produksi::find($id);
        if (empty($produksi)){
        return redirect(route('produksi.index'));
        }
        $produksi->delete();
        return redirect(route('produksi.index'));
    }
}
