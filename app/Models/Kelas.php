<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $guarded=['id'];

    public function RelationToGuru(){
        return $this->belongsTo('App\Models\Guru','id');
    }
    
    public function RelasiToSiswaFromKelas(){
        return $this->belongsToMany('App\Models\Siswa');
    }
}   

