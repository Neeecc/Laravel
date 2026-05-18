<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = [
        "Nama_Prodi",
        "Singkatan",
        "Kaprodi",
        "fakultas_id"
    ];

    public function fakultas(){
        return $this->belongsto(fakultas::class);
    }
}
