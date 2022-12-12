<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    

    protected $guarded=['id'];
    // public function RelationToGuru(){
    //     return $this->belongsTo('App\Models\Guru','id');
    // }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
