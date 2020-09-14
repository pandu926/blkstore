<?php

namespace App\Http\Controllers;

use App\Daftar;
use Illuminate\support\Facades\DB;
use App\Home;
use App\Tags;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $data = Home::all();
        dump($data);
        return view('home.dashboard', compact('data'));

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
        $home = new Home;
        $home->id_penjual = $request->idpenjual;
        $home->nama_barang = $request->namabarang;
        $home->harga = $request->harga;
        $home->jumlah = $request->jumlah;
        $home->berat = $request->berat;
        $home->deskripsi = $request->deskripsi;
        $home->save();
        return redirect('penjual/daftar')->with('status', 'Video berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('barangs')->where('id_barang', $id)->first();
        return view('home.detailproduk', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }

    public function keranjang()
    {
        return view('home.keranjang');
    }

    public function checkout()
    {
        return view('home.checkout');
    }

    public function tags(){
        $tags = DB::table('tags')->get();
        
        return view('home.tags', compact('tags'));
       
    }

    public function tag($slug)
    {
        $tag = DB::table('tags')->where('slug', $slug)->first();
        $post = Tags::find($tag->id);
        $read = $post->daftar()->get();
        return view('home.tag', compact('read','post'));
    }
    public function cek(){
        $tags = DB::table('tags')->get();
        $daftar = Daftar::all();
        return view('home.kategori',compact('tags' , 'daftar'));
}
    public function upload_tebaru ()
    {
        $daftar = Home::all();
        $terbaru = DB::table('daftar')
                    -> orderBy('created_at', 'desc')
                    -> take(5)
                    -> get();
        dump($terbaru);
        return view('home.terbaru', compact('daftar', 'terbaru'));
    }
}
