<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agencyModel;

class agencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = agencyModel::paginate(10);
        return view('agenci.agency', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kapal' => 'required',
            'voy' => 'required',
            'bendera' => 'required',
            'gt' => 'required',
            'port_asal' => 'required',
            'tgl_kedatangan' => 'required',
            'muatan_bongkar' => 'required',
            'jenis_muatan' => 'required',
            'tgl_keberangkatan' => 'required',
            'tujuan' => 'required',
            'muatan' => 'required',
            'detail' => 'required',
            'keterangan' => 'required',
            
        ]);

        $namakapal = $request->nama_kapal;
        $voy = $request->voy;
        $bendera = $request->bendera;
        $gt = $request->gt;
        $portasal = $request->port_asal;
        $tgldatang = $request->tgl_kedatangan;
        $muatanbongkar = $request->muatan_bongkar;
        $jenismuatan = $request->jenis_muatan;
        $tglbrgkt = $request->tgl_keberangkatan;
        $tujuan = $request->tujuan;
        $muatan = $request->muatan;
        $detail = $request->detail;
        $keterangan = $request->keterangan;

        $agency = new agencyModel();
        $agency->nama_kapal = $namakapal;
        $agency->voy = $voy;
        $agency->bendera = $bendera;
        $agency->gt = $gt;
        $agency->port_asal = $portasal;
        $agency->tgl_kedatangan = $tgldatang;
        $agency->muatan_bongkar = $muatanbongkar;
        $agency->jenis_muatan = $jenismuatan;
        $agency->tgl_keberangkatan = $tglbrgkt;
        $agency->tujuan = $tujuan;
        $agency->muatan = $muatan;
        $agency->detail = $detail;
        $agency->keterangan = $keterangan;

        if($agency->save()){
            return redirect()->back()->with('pesan','Data agency sudah di input...!!!');
        }else{
            return redirect()->back()->with('pesan','Data agency gagal di input..!!!');
        }

    }

    public function search(Request $request)
    {
        $agency = $request->nama_kapal;
        $data = agencyModel::where('nama_kapal','like',"%".$agency."%")->paginate(100);
        return view('agenci.agency', compact('data'));
    }
}
