<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 't_kelurahan';

    protected $fillable = [
        'id','nama','tempat_lahir','tgl_lahir','jenis_kelamin','agama','alamat','provinsi_id',
        'kelurahan_id','kecamatan_id','created_at','updated_at'
    ];
    
}
