<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bukti;
use Illuminate\Support\Facades\DB;
use Illuminate\SUpport\Facades\Auth;

class BuktiController extends Controller
{
    public function index(){
        $data_bukti = \App\Bukti::all();
        $data_bukti = DB::table('bukti')->orderBy('created_at', 'desc')->paginate(5);

        $users = Auth::user();

        $totalNilai = 0;
        foreach($users->laporan as $lpr){
            $point = $lpr->point;
            $totalNilai = $totalNilai+$point;
        }

        return view('statusUser', ['data_bukti' => $data_bukti, 'point' => $totalNilai]);
    }

    function save(Request $req){
        //print_r($req->input());
        //$path = $req->file('gambar')->store('public');
        $aksi = new Bukti;
        $aksi->kasus= $req->kasus;
        $aksi->status= $req->status;

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

        return redirect('/bukti')->with('pesan','Data berhasil dikirim');
    }
}
