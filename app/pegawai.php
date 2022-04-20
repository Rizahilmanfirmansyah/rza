<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = [
        'id', 'nama', 'jabatan', 'umur', 'jk', 'alamat'
    ];
}
