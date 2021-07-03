<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\SUpport\Facades\Auth;

class FeedbackController extends Controller
{
    public function index(){
        $users = Auth::user();

        $totalNilai = 0;
        foreach($users->laporan as $lpr){
            $point = $lpr->point;
            $totalNilai = $totalNilai+$point;
        }

        return view('feedbackUser', ['point' => $totalNilai]);
    }

    function save(Request $req){
        $aksi = new Feedback;
        $aksi->hero= $req->hero;
        $aksi->kasus= $req->kasus;
        $aksi->umpanbalik= $req->umpanbalik;
        $aksi->rate= $req->rate;
        echo $aksi->save();

        return redirect('/feedback-user')->with('pesan','Data berhasil dikirim');
    }
}
