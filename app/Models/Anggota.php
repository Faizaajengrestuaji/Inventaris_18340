<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [

        'nama_anggota',

        'no_anggota',

        'alamat',

    ];
}