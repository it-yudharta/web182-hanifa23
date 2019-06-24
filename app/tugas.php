<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    protected $fillable = ['nama','ttl','jenis_kelamin','agama','status','telpon','alamat'];
}
