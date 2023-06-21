<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MataKuliah extends Model
{
    // use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $fillable = ['id_mahasiswa', 'id_matakuliah', 'nilai'];

    public function mahasiswas()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
    public function matakuliahs()
    {
        return $this->belongsTo(MataKuliah::class, 'id_matakuliah');
    }
}
