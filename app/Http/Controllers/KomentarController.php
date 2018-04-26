<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
class KomentarController extends Controller
{
    public function store(Request $request){
		$komentar= new Komentar();
		$komentar->user = $request->name;
		$komentar->email = $request->email;
		$komentar->isi = $request->isi;
		$komentar->artikel_id = $request->artikel_id;
		$komentar->save();
		return redirect()->back()->with('status','Komentar telah terkirim');
    }
}
