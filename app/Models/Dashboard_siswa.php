<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard_siswa extends Model
{
    use HasFactory;
    protected $table = 'dashboard_siswa';
    protected $guarded=['id'];
}
