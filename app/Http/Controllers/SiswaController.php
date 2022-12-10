<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Kelas;
use App\Models\Kelas_Siswa;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{

    public function siswa(){
        $test = Siswa::all();
        $sis = Kelas::all();
        $dash = Dashboard::all();
        
        return view('dashboard-admin.siswa.datasiswa',['test'=>$test,'sis'=>$sis,'dash'=>$dash]);
    }

    public function storesiswa(Request $request){
        Siswa::create([
            'nama' => $request->nama,
            'nisn'=>$request->nisn,
            'kelas_id'=>$request->kelas,
            'jurusan'=>$request->jurusan,
            'jenis_kelamin'=>$request->jeniskelamin,
            'alamat'=>$request->alamat,
            'no_telepon'=>$request->notelepon,
            'email'=>$request->email,
            'password'=>$request->password,
            'point'=>0,
        ]);
        $data = DB::table('siswa')->orderBy('id', 'DESC')->limit(1)->get()->pluck('id')->first();
        
        Kelas_Siswa::create([
            'kelas_id' =>$request->kelas,
            'siswa_id' =>$data 
        ]);
        return redirect('/siswa');
    }

    public function update(Request $request){
        $doc = Siswa::findOrFail($request->id);
        $doc->update([
            'nama' => $request->nama,
            'nisn'=>$request->nisn,
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan,
            'jenis_kelamin'=>$request->jeniskelamin,
            'alamat'=>$request->alamat,
            'no_telepon'=>$request->notelepon,
            'email'=>$request->email,
            'password'=>$request->password,
            
        ]); 
        return redirect('/siswa');
    } 

    public function delete(Request $request){
        $doc = Siswa::findOrFail($request->id);
       
        $docs =  Kelas_Siswa::where('siswa_id', $request->id)->firstOrFail();
        $docs->delete([$request->all()]); 

        $doc->delete([$request->all()]); 
        
        return redirect('/siswa');
    } 
}
