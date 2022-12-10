<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard_pelanggaran extends Model
{
    use HasFactory;
    protected $table = 'dashboard_pelanggaran';
    protected $guarded=['id'];
}
