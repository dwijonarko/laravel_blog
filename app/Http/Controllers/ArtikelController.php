<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use Auth;
use File;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_artikel = Artikel::all();
        return view('artikel.index')->with('data_artikel',$data_artikel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = Kategori::all();
        return view('artikel.create')->with('data_kategori',$data_kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'judul'=>'required|min:5',
            'isi'=>'required|min:35',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->gambar->getClientOriginalExtension();
        request()->gambar->move(public_path('images'), $imageName);
        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->kategori_id  =  $request->kategori;
        $artikel->user_id = Auth::user()->id;
        $artikel->gambar = $imageName;
        $artikel->save();
        return redirect()->action('ArtikelController@index')->with('status','Artikel telah tersimpan');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_kategori = Kategori::all();
        $artikel = Artikel::find($id);
        return view('artikel.edit')->with('artikel',$artikel)->with('data_kategori',$data_kategori);
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
        request()->validate([
            'judul'=>'required|min:5',
            'isi'=>'required|min:35',
            'gambar' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $artikel = Artikel::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->kategori_id  =  $request->kategori;
        $artikel->user_id = Auth::user()->id;
        if (!empty($request->gambar)) {
            File::delete(public_path("images/".$artikel->gambar));
            $imageName = time().'.'.request()->gambar->getClientOriginalExtension();
            request()->gambar->move(public_path('images'), $imageName);
            $artikel->gambar = $imageName;
        }
        $artikel->save();
        return redirect()->action('ArtikelController@index')->with('status','Artikel telah tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect()->action('ArtikelController@index')->with('status','Data telah terhapus');
    }
}
