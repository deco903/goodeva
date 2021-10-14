<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pribadi;

class MilikPribadiController extends Controller
{
    public function index() 
    {
        return view('admin.page_km');
    }

    public function table_km(){
        return view('admin.table.table_km');
    }
    
    public function store(Request $request){

        $validated = $request->validate([
            'unit' => 'required',
            'nama_kapal' => 'required',
            'owner' => 'required',
            'penanggung_jawab' => 'required',
            'kru_karyawan' => 'required',
            'no_sertifikat' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_datang' => 'required',

        ]);

        $unit = $request->unit;
        $nama_kapal = $request->nama_kapal;
        $owner = $request->owner;
        $penanggung_jawab = $request->penanggung_jawab;
        $kru_karyawan = $request->kru_karyawan;
        $no_sertifikat = $request->no_sertifikat;
        $keberangkatan = $request->keberangkatan;
        $tujuan = $request->tujuan;
        $tgl_berangkat = $request->tgl_berangkat;
        $tgl_datang = $request->tgl_datang;


        $pribadi = new Pribadi();
        $pribadi->unit = $unit;
        $pribadi->nama_kapal = $nama_kapal;
        $pribadi->owner = $owner;
        $pribadi->penanggung_jawab = $penanggung_jawab;
        $pribadi->kru_karyawan = $kru_karyawan;
        $pribadi->no_sertifikat = $no_sertifikat;
        $pribadi->keberangkatan = $keberangkatan;
        $pribadi->tujuan = $tujuan;
        $pribadi->tgl_berangkat = $tgl_berangkat;
        $pribadi->tgl_datang = $tgl_datang;
        $pribadi->save();
        //dd($pribadi);

        return redirect()->route('page.km')->with('pesan','data berhasil di inputkan');

    }

    public function inventory(){
        return view('admin.inventory');
    }
    
    public function quo_km(){
        return view('admin.quotation.quo_km');
    }

    public function invoice_km(){
        return view('admin.invoice.invoice_km');
    }
    
}
