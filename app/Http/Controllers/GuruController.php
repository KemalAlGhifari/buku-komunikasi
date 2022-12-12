<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function guru(){
        $guru = Guru::all();
        return view('dashboard-admin.guru.dataguru',['guru'=>$guru]);
    }

    
    public function update(Request $request){
        $doc = Guru::findOrFail($request->id);
        $doc->update([
            'nama_guru' => $request->nama,
            'nip'=>$request->nip,
            'mata_pelajaran'=>$request->mata_pelajaran,
        ]);
        return redirect('/guru');
    }

    public function delete(Request $request){
        $doc = Guru::findOrFail($request->id);
        $doc->delete([$request->all()]); 
        return redirect('/guru');
    }

    public function store(Request $request){
        Guru::create([
            'nama_guru' => $request->nama_guru,
            'nip'=>$request->nip,
            'mata_pelajaran'=>$request->mata_pelajaran,
        ]);
        return redirect('/guru');
    }
}
