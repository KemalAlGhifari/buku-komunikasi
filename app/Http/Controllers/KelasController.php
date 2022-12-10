<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Guru_kelas;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function kelas(){
        $guru = Guru::with('RelationToKelasfromguru')->get();
        $test = Kelas::with('RelationToGuru')->get();
        
        return view('dashboard-admin.kelas.datakelas',['kelas'=>$test,'guru' => $guru]);
    }

    public function store(Request $request){
        Kelas::create([
            'nama_kelas' => $request->kelas,
            'guru_id'=>$request->walas,
        ]);
        $data = DB::table('kelas')->orderBy('id', 'DESC')->limit(1)->get()->pluck('id')->first();
        Guru_kelas::create([
            'guru_id'=>$request->walas,
            'kelas_id'=>$data
        ]);
        return redirect('/kelas');
    }
}
