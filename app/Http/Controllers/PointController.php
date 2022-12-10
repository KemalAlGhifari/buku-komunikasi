<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PointController extends Controller
{

    public function point(){
        $guru = Pelanggaran::all();
        return view('dashboard-admin.point.datapoint',['point'=>$guru]);
    }

    public function store(Request $request){
    Pelanggaran::create([
        'pelanggaran' => $request->pelanggaran,
        'sanksi'=>$request->sanksi,
        'point' => $request->point,
    ]);
    return redirect('/point');

    }

    public function update(Request $request){
        $doc = Pelanggaran::findOrFail($request->id);
        $doc->update([
            'pelanggaran' => $request->pelanggaran,
            'sanksi'=>$request->sanksi,
            'point'=>$request->point,
        ]);
        return redirect('/point');
    }

    public function delete(Request $request){
        $doc = Pelanggaran::findOrFail($request->id);
        $doc->delete([$request->all()]); 
        return redirect('/point');
    } 
}
