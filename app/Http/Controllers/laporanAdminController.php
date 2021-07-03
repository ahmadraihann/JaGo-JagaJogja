<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\SUpport\Facades\Auth;

class laporanAdminController extends Controller

{
    public function index()
    {
        $data_laporan = \App\Laporan::all();
        $data_pekerja = \App\User::all();
        $data_laporan = DB::table('laporan')->orderBy('created_at', 'desc')->paginate(5);
        $data_pekerja = DB::table('users')->where('role', 'pekerja')->get();

        return view('admin.laporan', ['data_laporan' => $data_laporan, 'data_pekerja' => $data_pekerja]);
    }

    public function indeks()
    {
        $data_laporan = \App\User::all();
        return view('laporanUser', compact('data_laporan'));
        //return view('layouts.app',['jumlah_point' => $totalNilai]);
    }

    function submit(Request $request){

        \App\DataMasuk::create($request->all());
        return redirect('/laporan')->with('pesan','Data berhasil dikirim');
    }

    public function hapus($id)
    {
        return hai;
    }
}
