<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabupaten = Kabupaten::all();
        $provinsi = Provinsi::all();
        return view('kabupaten.index', compact('kabupaten', 'provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kabupaten' => 'required',
            'provinsi_id' => 'required'
        ]);
        Kabupaten::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function show(Kabupaten $kabupaten)
    {
        return view('kabupaten.detail', compact('kabupaten'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function edit(Kabupaten $kabupaten)
    {

        $provinsi = Provinsi::all();
        return view('kabupaten.edit', compact('kabupaten', 'provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kabupaten $kabupaten)
    {
        $request->validate([
            'kabupaten' => 'required',
            'provinsi_id' => 'required'
        ]);
        $kabupaten->kabupaten = $request->kabupaten;
        $kabupaten->provinsi_id = $request->provinsi_id;
        $kabupaten->save();
        return redirect()->route('kabupaten.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kabupaten $kabupaten)
    {
        $kabupaten->delete();
        return redirect()->back();
    }
}