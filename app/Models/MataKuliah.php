<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $fillable = ['nama_matkul', 'sks', 'jam', 'semester'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa_MataKuliah::class, 'id_matakuliah');
    }
}
