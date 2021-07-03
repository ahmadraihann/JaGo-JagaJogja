<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\DB;
use App\DataProyekMasuk;

class MailController extends Controller{
    public function sendemail(Request $get){
        $email = $get->email;
        $subject = $get->subject;
        $message = $get->message;

        Mail::to($email)->send( new SendEmail($subject, $message) );

        $data_tugas = \App\DataMasuk::all();
        $data_tugas = DB::table('datamasuk')->orderBy('created_at', 'desc')->paginate(5);
        return view('terimaTugas', ['data_tugas' => $data_tugas])->with('messagesuccess','Laporan berhasil diselesaikan');;
    }
}