<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    public $timestamps =true;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
