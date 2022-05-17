<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 't_kelurahan';

    protected $fillable = [
        'id','nama','kode','status','created_at','updated_at'
    ];
}
