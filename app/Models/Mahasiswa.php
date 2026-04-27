<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';

    protected $fillable = [
        'fullname',
        'NIM',
        'NIDN',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat'
    ];
}