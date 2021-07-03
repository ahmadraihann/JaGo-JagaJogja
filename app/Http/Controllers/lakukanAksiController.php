<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LakukanAksi;
use Illuminate\SUpport\Facades\Auth;

class lakukanAksiController extends Controller
{
    //
    public function index(){
        $users = Auth::user();

        $totalNilai = 0;
        foreach($users->laporan as $lpr){
            $point = $lpr->point;
            $totalNilai = $totalNilai+$point;
        }

        return view('lakukanAKsi', ['point' => $totalNilai]);
    }

    function save(Request $req){
        //print_r($req->input());
        //$path = $req->file('gambar')->store('public');
        $aksi = new LakukanAksi;
        $aksi->user_id = auth()->id();
        $aksi->hero= $req->hero;
        $aksi->lingkup= $req->lingkup;
        $aksi->deskripsi= $req->deskripsi;
        $aksi->lokasi= $req->lokasi;
        $aksi->point= $req->point;
        $aksi->email= $req->email;
        //$aksi->gambar= $path;

        if ($req->hasfile('gambar')) {
            $file = $req->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/laporan', $filename);
            $aksi->gambar = $filename;
        } else {
            return $req;
            $aksi->gambar = '';
        }
        echo $aksi->save();

        return redirect('/lakukanaksi')->with('pesan','Data berhasil dikirim');

    }


}
