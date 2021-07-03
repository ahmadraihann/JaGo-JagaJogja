<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataProyekMasuk;

class pekerjaController extends Controller
{
    public function index(){
        $data_tugas = \App\DataMasuk::all();
        $data_tugas = DB::table('datamasuk')->orderBy('created_at', 'desc')->paginate(5);
        return view('terimaTugas', ['data_tugas' => $data_tugas])->with('pesan','Laporan berhasil diselesaikan');;
    }

    // public function update(Request $request){
    //     $data_laporan = \App\Laporan::all();

    //     \App\Laporan::create($request->all());
    //     return redirect('/laporan')->with('pesan','Data berhasil dikirim');
    // }
}
