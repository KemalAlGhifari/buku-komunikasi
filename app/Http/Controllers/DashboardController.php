<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Dashboard_pelanggaran;
use App\Models\Dashboard_siswa;
use App\Models\Guru;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class DashboardController extends Controller
{
    
    public function index(){
        $siswa = Siswa::all();
        $point = Pelanggaran::all();
        $dash = Dashboard::all();
        return view('dashboard-admin.dashboard.datadashboard',['siswa'=>$siswa,'point'=>$point,'dash'=>$dash]);
    }

    public function store(Request $request){
        Dashboard::create([
            'siswa_id' => $request->siswa,
            'pelanggaran_id'=>$request->pelanggaran,
            'tanggal'=>$request->tanggal
        ]);
        $data = DB::table('dashboard')->orderBy('id', 'DESC')->limit(1)->get()->pluck('id')->first();
        Dashboard_siswa::create([
            'siswa_id'=>$request->siswa,
            'dashboard_id'=>$data
        ]);

        Dashboard_pelanggaran::create([
            'pelanggaran_id'=>$request->pelanggaran,
            'dashboard_id'=>$data
        ]);
        $doc = Siswa::findOrFail($request->siswa);
        $docs = Pelanggaran::findOrFail($request->pelanggaran);
        $dok = $docs->point;
        $doks = $doc->point;
        $plus = $doks + $dok;

        $doc->update([
            'point' => $plus,
        ]);
        
        
        return redirect('/');
    }
    
    public function delete(){
        
    }
}
