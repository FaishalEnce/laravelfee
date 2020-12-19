<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanamans=Tanaman::all(); // select * from tanaman

        return view('tanaman.index', compact('tanamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanaman.create');
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

        tanaman::create($input); // insert into ... ... 

        return redirect()->route('tanaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tanaman=Tanaman::find($id);

        return view('tanaman.show',compact('tanaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanaman $tanaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanaman $tanaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $tanaman=Tanaman::find($id);
        if (empty($tanaman)){
        return redirect(route('tanaman.index'));
        }
        $tanaman->delete();
        return redirect(route('tanaman.index'));
    }
}
