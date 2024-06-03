<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $primaryKey = "id_petugas";

    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
        'id_level'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}