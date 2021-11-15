<?php

namespace App\Http\Controllers;

use App\Models\Sewa; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KapalSewaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    //index
    public function page_sw(){
        $kapal_sewa = Sewa::all();
        return view('admin.page_sw',compact('kapal_sewa'));
    }

    //create
    public function table_sw(){
        return view('admin.table.table_sw');
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $model= new Sewa;
        $model->unit = $request->unit;
        $model->nama_kapal = $request->nama_kapal;
        $model->owner = $request->owner;
        $model->penanggung_jawab = $request->penanggung_jawab;
        $model->kru_karyawan = $request->kru_karyawan;
        $model->no_sertifikat = $request->no_sertifikat;
        $model->keberangkatan = $request->keberangkatan;
        $model->tujuan = $request->tujuan;
        $model->tgl_berangkat = $request->tgl_berangkat;
        $model->tgl_datang = $request->tgl_datang;
        $model->keterangan = $request->keterangan;
        

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
        $keterangan = $request->keterangan;

        
        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('post-image', $nama_file);
            $model->image = $nama_file;
        }
        $model->save();
        return redirect('/page_sw')->with('success, Berhasil Simpan');
        

    }
    //show
    public function show(Sewa $sewa)
    {
        return view('admin.table.show_sw',[
        'sewa'=> $sewa
        ]);
    }

    //edit
    public function editTable(Sewa $sewa, $id)
    {
        $kapal_sewa = Sewa::findorfail($id);
        return view('admin.table.edit_sw', compact('kapal_sewa'));
    }

    public function update(Request $request, Sewa $sewa, $id)
    {

        $ven= Sewa::findorfail($id);
        $model= Sewa::findorfail($id);
        
        $model->unit = $request->input('unit');
        $model->nama_kapal = $request->input('nama_kapal');
        $model->owner = $request->input('owner');
        $model->penanggung_jawab = $request->input('penanggung_jawab');
        $model->kru_karyawan = $request->input('kru_karyawan');
        $model->keberangkatan = $request->input('keberangkatan');
        $model->tujuan = $request->input('tujuan');
        $model->tgl_berangkat = $request->input('tgl_berangkat');
        $model->tgl_datang = $request->input('tgl_datang');
        $model->keterangan = $request->input('keterangan');
        

        $unit=$request->unit;
        $nama_kapal=$request->nama_kapal;
        $owner=$request->owner;
        $penanggung_jawab=$request->penanggung_jawab;
        $kru_karyawan=$request->kru_karyawan;
        $keberangkatan=$request->keberangkatan;
        $tujuan=$request->tujuan;
        $tgl_berangkat=$request->tgl_berangkat;
        $tgl_datang=$request->tgl_datang;
        $keterangan=$request->keterangan;

        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('post-image', $nama_file);
            $model->image = $nama_file;
        }
            $model->update();
        return redirect('/page_sw')->with('success','Berhasil Update Data');

    }

    public function destroy(Sewa $sewa, $id)
    {
        Sewa::destroy($id);
        return back()->with('success', 'Berhasil Terhapus');
        // Sewa::destroy($kapal_sewa->id);
        // return redirect('/page_sw')->with('success', 'Berhasil Terhapus');
    }
    
    public function vendor(){
        return view('admin.vendor');
    }

    public function table_vendor(){
        return view('admin.table.table_vendor');
    }
}

