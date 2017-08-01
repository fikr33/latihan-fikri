<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anak;
use App\orangtua;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswas = siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu = orangtua::all();
        return view('siswa.create', compact('ortu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $anak = new siswa;
        $anak->nama = $request->a;
        $anak->orangtua_id = $request->b;
        $anak->umur = $request->c;
        $anak->alamat = $request->d;
        $anak->save();
        return redirect('siswas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anak = siswa::findOrFail($id);
        $ortu = orangtua::all();
        return view('anak.show',compact('anak', 'ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $anak = Anak::findOrFail($id);
        $ortu = orangtua::all();
        return view('anak.edit', compact('anak', 'ortu'));
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
        //
        $anak = Anak::findOrFail($id);
        $anak->nama = $request->a;
        $anak->orangtua_id = $request->b;
        $anak->umur = $request->c;
        $anak->alamat = $request->d;
        $anak->save();
        return redirect('anak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $anak = Anak::findOrFail($id);
        $anak->delete();
        return redirect('anak');
    }
}
