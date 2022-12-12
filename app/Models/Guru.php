<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama_guru',
        'nip',
        'mata_pelajaran',
    ];

    public function kelass(){
        return $this->hasOne(Kelas::class);
    }
}
