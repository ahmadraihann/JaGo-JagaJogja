<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\SUpport\Facades\Auth;

class LaporanUserController extends Controller
{
    public function index(){

        $users = Auth::user();

        $totalNilai = 0;
        foreach($users->laporan as $lpr){
            $point = $lpr->point;
            $totalNilai = $totalNilai+$point;
        }
        return view('laporanUser', ['users' => $users, 'point' => $totalNilai]);
    }
}
