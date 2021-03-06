<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class FrontPageController extends Controller
{
    public function index(){
        $data_artikel  = Artikel::all();
        return view('frontpage.index')->with('data_artikel',$data_artikel);
    }

    public function show($id){
        $artikel = Artikel::find($id);
        return view('frontpage.show')->with('artikel', $artikel);
        
    }
}
