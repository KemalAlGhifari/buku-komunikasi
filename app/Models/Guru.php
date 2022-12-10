<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = [
        'nama',
        'nip',
        'mata_pelajaran',
    ];

    public function RelationToKelasfromguru(){
        return $this->hasMany('App\Models\Kelas');
    }
}
