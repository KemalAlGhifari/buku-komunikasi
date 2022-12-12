<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
      'nama_kelas',
      'guru_id',  
    ];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
    
    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}   

