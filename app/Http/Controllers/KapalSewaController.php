<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Sewa;
use App\Models\Notifikasi;
use App\Models\Uploadgambar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KapalSewaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function prnpriview($id)
      {
        $kapal_sewa = Sewa::where('id', $id)->get();
        view()->share('kapal_sewa', $kapal_sewa);
        $pdf = PDF::loadview('admin.print.kapal_sw');
        return $pdf->download('data.pdf');
      }
    
    //index
    public function page_sw()
    {
        $kapal_sewa = Sewa::with('gambar')->paginate(10);
        $data_foto = Uploadgambar::all();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        $data = $kapal_sewa->merge($data_foto);
        return view('admin.page_sw', ['notifall' => $notifall, 'notif' => $notif, 'kapal_sewa' => $kapal_sewa, 'data_foto' => $data_foto]);
    }

    //create
    public function table_sw(Request $request){
        $data_foto = Uploadgambar::where('id_kapal', $request->session()->get('id_kapalsewa_form'))->get();
        $data_tujuan = ['Pelabuhan Tanjung Priok', 'Pelabuhan Tanjung Perak', 'Pelabuhan Ketapang', 'Pelabuhan Harbour Bay', 'Pelabuhan Tanjung Mas', 'Pelabuhan Sunda Kelapa', 'Pelabuhan Sorekarno-Hatta', 'Pelabuhan Merak', 'Pelabuhan Batam-Center','Pelabuhan Bakauheni','Pelabuhan Gorontalo','Pelabuhan Banjarmasin','Pelabuhan Gilimanuk','Pelabuhan Jayapura'];
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        if ($request->session()->has('id_kapalsewa_form')) {
            $data_form = Sewa::find($request->session()->get('id_kapalsewa_form'));
            return view('admin.table.table_sw', ['notifall' => $notifall, 'notif' => $notif, 'data_foto' => $data_foto, 'data_form' => $data_form, 'data_tujuan' => $data_tujuan]);
        } else {
            return view('admin.table.table_sw', ['notifall' => $notifall, 'notif' => $notif, 'data_foto' => $data_foto, 'data_tujuan' => $data_tujuan]);
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $id = $request->id;
        $unit = $request->unit;
        $nama_kapal = $request->nama_kapal;
        $owner = $request->owner;
        $penanggung_jawab = $request->penanggung_jawab;
        $customer = $request->customer;
        $keberangkatan = $request->keberangkatan;
        $tujuan = $request->tujuan;
        $tgl_berangkat = $request->tgl_berangkat;
        $tgl_datang = $request->tgl_datang;
        $harga_sewa_owner = $request->harga_sewa_owner;
        $harga_sewa_customer = $request->harga_sewa_customer;
        $keterangan = $request->keterangan;

        if (!$request->session()->has('id_kapalsewa_form')) {
            $model= new Sewa;
            $model->unit = $request->unit;
            $model->nama_kapal = $request->nama_kapal;
            $model->owner = $request->owner;
            $model->penanggung_jawab = $request->penanggung_jawab;
            $model->customer = $request->customer;
            $model->keberangkatan = $request->keberangkatan;
            $model->tujuan = $request->tujuan;
            $model->tgl_berangkat = $request->tgl_berangkat;
            $model->tgl_datang = $request->tgl_datang;
            $model->harga_sewa_owner = $request->harga_sewa_owner;
            $model->harga_sewa_customer = $request->harga_sewa_customer;
            $model->keterangan = $request->keterangan;
            $model->save();
            $request->session()->put('id_kapalsewa_form', $model->id);
            return redirect('/page_sw/table_sw')->with('success, Berhasil Simpan. Tambahkan sertifikat untuk melanjutkan');
        } else {
            Sewa::where('id', $id)->update([
                'unit' => $unit,
                'nama_kapal' => $nama_kapal,
                'owner' => $owner,
                'penanggung_jawab' => $penanggung_jawab,
                'customer' => $customer,
                'keberangkatan' => $keberangkatan,
                'tujuan' => $tujuan,
                'tgl_berangkat' => $tgl_berangkat,
                'tgl_datang' => $tgl_datang,
                'harga_sewa_owner' => $harga_sewa_owner,
                'harga_sewa_customer' => $harga_sewa_customer,
                'keterangan' => $keterangan
            ]);
            $request->session()->forget('id_kapalsewa_form', $id);
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '1',
            'task' => 'Add Data Kapal Sewa'
            ]);
            return redirect('/page_sw')->with('success, Berhasil Simpan.');
        }
    }

    public function storebyclick(Request $request) {
        $id = $request->id;
        $unit = $request->unit;
        $nama_kapal = $request->nama_kapal;
        $owner = $request->owner;
        $penanggung_jawab = $request->penanggung_jawab;
        $customer = $request->customer;
        $keberangkatan = $request->keberangkatan;
        $tujuan = $request->tujuan;
        $tgl_berangkat = $request->tgl_berangkat;
        $tgl_datang = $request->tgl_datang;
        $harga_sewa_owner = $request->harga_sewa_owner;
        $harga_sewa_customer = $request->harga_sewa_customer;
        $keterangan = $request->keterangan;

        if (!$id) {
            $model= new Sewa;
            $model->unit = $request->unit;
            $model->nama_kapal = $request->nama_kapal;
            $model->owner = $request->owner;
            $model->penanggung_jawab = $request->penanggung_jawab;
            $model->customer = $request->customer;
            $model->keberangkatan = $request->keberangkatan;
            $model->tujuan = $request->tujuan;
            $model->tgl_berangkat = $request->tgl_berangkat;
            $model->tgl_datang = $request->tgl_datang;
            $model->harga_sewa_owner = $request->harga_sewa_owner;
            $model->harga_sewa_customer = $request->harga_sewa_customer;
            $model->keterangan = $request->keterangan;
            $model->save();
            $request->session()->put('id_kapalsewa_form', $model->id);
            return response()->json([
                'id' => $model->id
            ]);
        } else {
            Sewa::where('id', $id)->update([
                'unit' => $unit,
                'nama_kapal' => $nama_kapal,
                'owner' => $owner,
                'penanggung_jawab' => $penanggung_jawab,
                'customer' => $customer,
                'keberangkatan' => $keberangkatan,
                'tujuan' => $tujuan,
                'tgl_berangkat' => $tgl_berangkat,
                'tgl_datang' => $tgl_datang,
                'harga_sewa_owner' => $harga_sewa_owner,
                'harga_sewa_customer' => $harga_sewa_customer,
                'keterangan' => $keterangan
            ]);
            return response()->json([
                'id' => $id
            ]);
        }
    }
    //show
    public function show(Sewa $sewa, $id, Request $request)
    {
        $kapal_sewa = Sewa::findorfail($id);
        $data_foto = Uploadgambar::where('id_kapal', $id)->get();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.table.show_sw', ['notifall' => $notifall, 'notif' => $notif, 'kapal_sewa' => $kapal_sewa, 'data_foto' => $data_foto]);
    }

    //edit
    public function editTable(Sewa $sewa, $id)
    {
        $kapal_sewa = Sewa::findorfail($id);
        $data_foto = Uploadgambar::where('id_kapal', $id)->get();
        $data_tujuan = ['Pelabuhan Tanjung Priok', 'Pelabuhan Tanjung Perak', 'Pelabuhan Ketapang', 'Pelabuhan Harbour Bay', 'Pelabuhan Tanjung Mas', 'Pelabuhan Sunda Kelapa', 'Pelabuhan Sorekarno-Hatta', 'Pelabuhan Merak', 'Pelabuhan Batam-Center','Pelabuhan Bakauheni','Pelabuhan Gorontalo','Pelabuhan Banjarmasin','Pelabuhan Gilimanuk','Pelabuhan Jayapura'];
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.table.edit_sw', ['notifall' => $notifall, 'notif' => $notif, 'kapal_sewa' => $kapal_sewa, 'data_foto' => $data_foto, 'data_tujuan' => $data_tujuan]);
    }

    public function update(Request $request, Sewa $sewa, $id)
    {
        $ven = Sewa::findorfail($id);
        $model = Sewa::findorfail($id);
        
        $model->unit = $request->input('unit');
        $model->nama_kapal = $request->input('nama_kapal');
        $model->owner = $request->input('owner');
        $model->penanggung_jawab = $request->input('penanggung_jawab');
        $model->customer = $request->input('customer');
        $model->keberangkatan = $request->input('keberangkatan');
        $model->tujuan = $request->input('tujuan');
        $model->tgl_berangkat = $request->input('tgl_berangkat');
        $model->tgl_datang = $request->input('tgl_datang');
        $model->harga_sewa_owner = $request->input('harga_sewa_owner');
        $model->harga_sewa_customer = $request->input('harga_sewa_customer');
        $model->keterangan = $request->input('keterangan');

        $unit=$request->unit;
        $nama_kapal=$request->nama_kapal;
        $owner=$request->owner;
        $penanggung_jawab=$request->penanggung_jawab;
        $customer=$request->customer;
        $keberangkatan=$request->keberangkatan;
        $tujuan=$request->tujuan;
        $tgl_berangkat=$request->tgl_berangkat;
        $tgl_datang=$request->tgl_datang;
        $harga_sewa_owner = $request->harga_sewa_owner;
        $harga_sewa_customer = $request->harga_sewa_customer;
        $keterangan=$request->keterangan;

        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('post-image', $nama_file);
            $model->image = $nama_file;
        }
            $model->update();
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '2',
            'task' => 'Update Data Kapal Sewa'
            ]);
        return redirect('/page_sw')->with('success','Berhasil Update Data');

    }

    public function destroy(Sewa $sewa, $id)
    {
        Sewa::destroy($id);
        Uploadgambar::where('id_kapal', $id)->delete();
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '3',
            'task' => 'Delete Data Kapal Sewa'
            ]);
        return back()->with('success', 'Berhasil Terhapus');
    }

    public function carisw(Request $request)
    {
        $namakapal = $request->nama_kapal;
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $kapal_sewa = Sewa::where('nama_kapal','like',"%".$namakapal."%")->paginate(1);
        $notifall = Notifikasi::all();
        return view('admin.page_sw', compact('kapal_sewa'), ['notifall' => $notifall, 'notif' => $notif]);
    }
    
    public function vendor(){
        return view('admin.vendor');
    }

    public function table_vendor(){
        return view('admin.table.table_vendor');
    }
}

