<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    // use HasFactory;
    protected $table = 'dashboard';
    protected $guarded=['id'];

    public function RelasiToSiswaFromDash(){
        return $this->belongsToMany('App\Models\Siswa');
    }
    
    public function RelasiToPelanggaranFromDash(){
        return $this->belongsToMany('App\Models\Pelanggaran');
    }
}
