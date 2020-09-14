<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Daftar;
use App\Flight;
use App\Tags;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function daftar(Request $request)
    {
        $daftar = Daftar::all();
        $tags = DB::table('tags')->get();
       
        $users = Daftar::when($request->keyword, function ($query) use ($request) {
            $query->where('durasi', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%");
        })->paginate();
        return view('admin.daftar', compact('daftar','tags','users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $daftar = new daftar;
        $daftar->nama = $request->nama;
        $daftar->slug = str_slug($daftar->nama);
        $daftar->durasi = $request->durasi;
        $daftar->rating = $request->rating;
        $daftar->link = $request->link;
        if($request->hasFile('gambar')){
            $resorce       = $request->file('gambar');
            $gambar   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/resources/img/", $gambar);
        }
        $daftar->gambar = $gambar;
        
        
        $daftar->save();
        $daftar->tags()->attach($request->tags);
        return redirect('admin/daftar')->with('status', 'Video berhasil di tambahkan');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        return $daftar;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $edit = DB::table('daftar')->where('slug', $slug)->first();
        $post = Daftar::find($edit->id);
        $daftar = $post->tags()->get();
        dump($daftar);
        return view('admin.edit', compact('daftar','post'));
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
    }
    
}