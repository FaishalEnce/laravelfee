<?php

namespace App\Http\Controllers;

use App\Models\Produktifitas_perkebunan;
use Illuminate\Http\Request;

class PpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produktifitas_perkebunans=Produktifitas_perkebunan::all(); // select * from produktifitas_perkebunan

        return view('produktifitas_perkebunan.index', compact('produktifitas_perkebunans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produktifitas_perkebunan.create');
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

        Produktifitas_perkebunan::create($input); // insert into ... ... 

        return redirect()->route('produktifitas_perkebunan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produktifitas_perkebunan  $produktifitas_perkebunan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produktifitas_perkebunan=Produktifitas_perkebunan::find($id);

        return view('produktifitas_perkebunan.show',compact('produktifitas_perkebunan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produktifitas_perkebunan  $produktifitas_perkebunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Produktifitas_perkebunan $produktifitas_perkebunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produktifitas_perkebunan  $produktifitas_perkebunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produktifitas_perkebunan $produktifitas_perkebunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produktifitas_perkebunan  $produktifitas_perkebunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produktifitas_perkebunan $produktifitas_perkebunan)
    {
        //
    }
}
