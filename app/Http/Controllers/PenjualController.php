<?php

namespace App\Http\Controllers;

use App\Penjual;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjual = Penjual::all();
        return view('penjual.dashboard' , compact('penjual'));
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
        $penjual = new Penjual;
        $penjual->username = $request->username;
        $penjual->email = $request->email;
        $penjual->password = $request->password;
        $penjual->save();
        return redirect('penjual/daftar')->with('status', 'Video berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function show(Penjual $penjual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjual = Penjual::find($id);
        dump($penjual);
        return view('penjual.edit', compact('penjual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjual $penjual, $id)
    {
        $penjual = Penjual::find($id);
        $penjual->username = $request->username;
        $penjual->email = $request->email;
        $penjual->password = $request->password;
        $penjual->save();
        return redirect('penjual/daftar')->with('status', 'Video berhasil di tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjual $penjual)
    {
        
    }
}
