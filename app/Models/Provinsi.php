<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 't_provinsi';

    protected $fillable = [
        'id','nama','kode','status','created_at','updated_at'
    ];
}
