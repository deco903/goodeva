<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kp;

class KpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $pribadi = Pribadi::all();
        return view('admin.page_km', compact('pribadi'));
    }

    public function table_km(){
        return view('admin.table.table_km');
    }

    public function storeTablekm(Request $request)
    {
        $validated = $request->validate([
            'nama_kapal' => 'required',
            'keberangkatan' => 'required',
            'kru_kapal' => 'required',
            'tujuan' => 'required',
            'nama_penyewa' => 'required',
            'tgl_keberangkatan' => 'required',
            'tgl_tiba' => 'required',
            'keterangan' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
            'nama_file' => 'required',
            'no_izin' => 'required',
            'tgl_terbitfile' => 'required',
            'tgl_berakhirfile' => 'required',
        ]);


            $nama_kapal = $request->nama_kapal;
            $keberangkatan = $request->keberangkatan;
            $kru_kapal = $request->kru_kapal;
            $tujuan = $request->tujuan;
            $nama_penyewa = $request->nama_penyewa;
            $tgl_keberangkatan = $request->tgl_keberangkatan;
            $tgl_tiba = $request->tgl_tiba;
            $keterangan = $request->keterangan;

            $image = $request->file('photo');
            $imageName = Request()->nama_file.'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/img'),$imageName);
            $nama_file = $request->nama_file;
            $no_izin = $request->no_izin;
            $tgl_terbitfile = $request->tgl_terbitfile;
            $tgl_berakhirfile = $request->tgl_berakhirfile;

            $pribadi = new kp();
            $pribadi->nama_kapal = '';
            $pribadi->keberangkatan = '';
            $pribadi->kru_kapal = '';
            $pribadi->tujuan = '';
            $pribadi->nama_penyewa = '';
            $pribadi->tgl_keberangkatan = '';
            $pribadi->tgl_tiba = '';
            $pribadi->keterangan = '';
            $pribadi->photo = $imageName;
            $pribadi->nama_file = $nama_file;
            $pribadi->no_izin = $no_izin;
            $pribadi->tgl_terbitfile = $tgl_terbitfile;
            $pribadi->tgl_berakhirfile = $tgl_berakhirfile;

            $pribadi->save();

            return redirect()->back();

    }
}
