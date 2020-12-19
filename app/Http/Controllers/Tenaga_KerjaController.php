<?php

namespace App\Http\Controllers;

use App\Models\Tenaga_Kerja;
use Illuminate\Http\Request;

class TenagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenaga_kerjas=Tenaga_Kerja::all(); // select * from tenaga_kerja

        return view('tenaga_kerja.index', compact('tenaga_kerjas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenaga_kerja.create');
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

        Tenaga_Kerja::create($input); // insert into ... ... 

        return redirect()->route('tenaga_kerja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenaga_Kerja  $tenaga_Kerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenaga_Kerja=Tenaga_Kerja::find($id);

        return view('tenaga_kerja.show',compact('tenaga_kerja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenaga_Kerja  $tenaga_kerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenaga_Kerja $tenaga_kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenaga_Kerja  $tenaga_kerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenaga_Kerja $tenaga_Kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenaga_Kerja  $tenaga_Kerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenaga_Kerja $tenaga_Kerja)
    {
        //
    }
}
