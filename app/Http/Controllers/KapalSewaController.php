<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa; 

class KapalSewaController extends Controller
{
    public function page_sw(){
        $kapal_sewa = Sewa::paginate(10);
        return view('admin.page_sw',compact('kapal_sewa'));
    }

    public function table_sw(){
        return view('admin.table.table_sw');
    }

    public function store(Request $request)
    {
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


        $sewa = new Sewa();
        $sewa->unit = $unit;
        $sewa->nama_kapal = $nama_kapal;
        $sewa->owner = $owner;
        $sewa->penanggung_jawab = $penanggung_jawab;
        $sewa->kru_karyawan = $kru_karyawan;
        $sewa->no_sertifikat = $no_sertifikat;
        $sewa->keberangkatan = $keberangkatan;
        $sewa->tujuan = $tujuan;
        $sewa->tgl_berangkat = $tgl_berangkat;
        $sewa->tgl_datang = $tgl_datang;
        $sewa->save();
        // dd($sewa);    

        return redirect()->route('page.sw')->with('pesan','data berhasil di inputkan');
    }

    public function editTable($id)
    {
        $kapal_sewa = Sewa::find($id);
        return view('admin.table.editablesw',compact('kapal_sewa'));
    }

    public function update(Request $request)
    {
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

        $kapal_sewa = Sewa::find($request->id);

        $kapal_data = [
            'unit' => $request->unit, 
            'nama_kapal' => $request->nama_kapal,
            'owner' => $request->owner, 
            'penanggung_jawab' => $request->penanggung_jawab,
            'kru_karyawan' => $request->kru_karyawan, 
            'no_sertifikat' => $request->no_sertifikat,
            'keberangkatan' => $request->keberangkatan, 
            'tujuan' => $request->tujuan, 
            'tgl_berangkat' => $request->tgl_berangkat, 
            'tgl_datang' => $request->tgl_datang, 

        ];

        $kapal_sewa->update($kapal_data);

        return redirect()->route('page.sw')->with('pesan','Data berhasil di update...!!!');

    }

    public function hapus($id)
    {
        $kapal_sewa = Sewa::find($id);
        $kapal_sewa->delete();
        return redirect()->back()->with('pesan','Data berhasil di hapus...!!!');
    }
    
    public function vendor(){
        return view('admin.vendor');
    }

    public function table_vendor(){
        return view('admin.table.table_vendor');
    }
}

