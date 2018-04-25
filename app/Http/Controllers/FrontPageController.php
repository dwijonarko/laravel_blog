<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class FrontPageController extends Controller
{
    public function index(){
        $data_artikel  = Artikel::all();
        return view('welcome')->with('data_artikel',$data_artikel);
    }
}
