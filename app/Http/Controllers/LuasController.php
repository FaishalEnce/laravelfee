<?php

namespace App\Http\Controllers;

use App\Models\Luas;
use Illuminate\Http\Request;

class LuasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $luass=Luas::all(); // select * from luas

        return view('luas.index', compact('luass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('luas.create');
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

        Luas::create($input); // insert into ... ... 

        return redirect()->route('luas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Luas  $luas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $luas=Luas::find($id);

        return view('luas.show',compact('luas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Luas  $luas
     * @return \Illuminate\Http\Response
     */
    public function edit(Luas $luas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Luas  $luas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Luas $luas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Luas  $luas
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $luas=Luas::find($id);
        if (empty($luas)){
        return redirect(route('luas.index'));
        }
        $luas->delete();
        return redirect(route('luas.index'));
    }
}
