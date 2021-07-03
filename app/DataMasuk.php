<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMasuk extends Model
{
    protected $table ='datamasuk';
    protected $fillable = ['hero','email','deskripsi','lokasi', 'user_id'];
    public $timestamps =true;

}
