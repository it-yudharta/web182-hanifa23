<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama','tempat_tanggal_lahir','kewarganegaraan','jenis_kelamin','status','agama','anak_ke','alamat','telpon'];
}
