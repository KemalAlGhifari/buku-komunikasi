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
        $guru = Guru::all();
        $test = Kelas::with('guru')->get();

        
        return view('dashboard-admin.kelas.datakelas',compact(['guru','test']));
    }

    public function store(Request $request){
        Kelas::create([
            'nama_kelas' => $request->kelas,
            'guru_id'=>$request->walas,
        ]);
       
        return redirect('/kelas');
    }

    public function delete($id){
        $datas = kelas::findOrFail($id);
        $datas->delete();
        return redirect('/kelas');
    }

    public function update(Request $request){
        $data = kelas::findOrFail($request->id);
        $data->update([
            'nama_kelas' => $request->kelas,
            'guru_id'=>$request->walas,
        ]);
        return redirect('/kelas');
    }
}
