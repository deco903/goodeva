<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Gambar;
use App\Models\Pribadi;
use App\Models\kruModel;
use App\Models\Notifikasi;
use App\Models\Uploadgambar;
use Illuminate\Http\Request;
use App\Models\kapal_pribadi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Exports\KapalPribadi_mExport;
use App\Imports\KapalPribadi_mImport;
use Maatwebsite\Excel\Facades\Excel;




class MilikPribadiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function prnpriview($id)
      {
        $pribadi = Pribadi::where('id', $id)->get();
        view()->share('pribadi', $pribadi);
        $pdf = PDF::loadview('admin.print.kapal_km');
        return $pdf->download('data.pdf');
      }

    public function index() {
        $pribadi = Pribadi::with('gambar')->paginate(10);
        $data_foto = Uploadgambar::all();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.page_km', compact('pribadi'),['notifall' => $notifall, 'notif' => $notif, 'pribadi' => $pribadi,'nama_kru' => kruModel::all(), 'data_foto' => $data_foto]);
    }
    
    public function kapalpribadiexport(){
        return Excel::download(new KapalPribadi_mExport,'kapalpribadi.xlsx');
    }

    public function kapalpribadiimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('datakapalribadi',$namaFile );
        excel::import('KapalPribadi_mImport', public_path('/datakapapribadi/', $namaFile));
        return redirect('page.km');
    }
    public function table_km(Request $request){
        $data_foto = Uploadgambar::where('id_kapal', $request->session()->get('id_kapalpribadi_form'))->get();
        $data_tujuan =  ['Pelabuhan Tanjung Priok', 'Pelabuhan Tanjung Perak', 'Pelabuhan Ketapang', 'Pelabuhan Harbour Bay', 'Pelabuhan Tanjung Mas', 'Pelabuhan Sunda Kelapa', 'Pelabuhan Sorekarno-Hatta', 'Pelabuhan Merak', 'Pelabuhan Batam-Center','Pelabuhan Bakauheni','Pelabuhan Gorontalo','Pelabuhan Banjarmasin','Pelabuhan Gilimanuk','Pelabuhan Jayapura'];
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        if ($request->session()->has('id_kapalpribadi_form')) {
            $data_form = Pribadi::find($request->session()->get('id_kapalpribadi_form'));
            return view('admin.table.table_km', ['notifall' => $notifall, 'data_foto' => $data_foto, 'data_form' => $data_form, 'data_tujuan' => $data_tujuan,  'nama_kru' => kruModel::all(), 'notif' => $notif]);
        } else {
            return view('admin.table.table_km', ['notifall' => $notifall,'data_foto' => $data_foto, 'data_tujuan' => $data_tujuan,  'nama_kru' => kruModel::all(), 'notif' => $notif]);
        }
    }
    
    public function storeTablekm(Request $request, kruModel $kruModel)
    {
        $id = $request->id;
        $customer = $request->customer;
        $nama_kapal = $request->nama_kapal;
        $keberangkatan = $request->keberangkatan;
        $nama_kru = $request->nama_kru;
        $krus = implode(' - ' , $nama_kru);
        $tujuan = $request->tujuan;
        $nama_penyewa = $request->nama_penyewa;
        $mulai_sewa = $request->mulai_sewa;
        $sewa_selesai = $request->sewa_selesai;
        $harga_sewa_customer = $request->harga_sewa_customer;
        $keterangan = $request->keterangan;

        if (!$request->session()->has('id_kapalpribadi_form')) {
            $model= new Pribadi;
            $model->customer = $request->customer;
            $model->nama_kapal = $request->nama_kapal;
            $model->keberangkatan = $request->keberangkatan;
            $model->nama_kru = $krus;
            $model->tujuan = $request->tujuan;
            $model->nama_penyewa = $request->nama_penyewa;
            $model->mulai_sewa = $request->mulai_sewa;
            $model->sewa_selesai = $request->sewa_selesai;
            $model->harga_sewa_customer = $request->harga_sewa_customer;
            $model->keterangan = $request->keterangan;
            $model->save();
            $request->session()->put('id_kapalpribadi_form', $model->id);
            return redirect('/page_km/table_km')->with('success, Berhasil Simpan. Tambahkan sertifikat untuk melanjutkan');
        } else {
            Pribadi::where('id', $id)->update([
                'customer' => $customer,
                'nama_kapal' => $nama_kapal,
                'keberangkatan' => $keberangkatan,
                'nama_kru' => $krus,
                'tujuan' => $tujuan,
                'nama_penyewa' => $nama_penyewa,
                'mulai_sewa' => $mulai_sewa,
                'sewa_selesai' => $sewa_selesai,
                'harga_sewa_customer' => $harga_sewa_customer,
                'keterangan' => $keterangan
            ]);
            $request->session()->forget('id_kapalpribadi_form', $id);
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '1',
            'task' => 'Add Data Kapal Pribadi'
            ]);
            return redirect('/page_km')->with('success, Berhasil Simpan.');
        }
    
    }

    public function storebyclick(Request $request) {
        $id = $request->id;
        $customer = $request->customer;
        $nama_kapal = $request->nama_kapal;
        $keberangkatan = $request->keberangkatan;
        $nama_kru = $request->nama_kru;
        $krus = implode('  -  '  , $nama_kru);
        $tujuan = $request->tujuan;
        $nama_penyewa = $request->nama_penyewa;
        $mulai_sewa = $request->mulai_sewa;
        $sewa_selesai = $request->sewa_selesai;
        $harga_sewa_customer = $request->harga_sewa_customer;
        $keterangan = $request->keterangan;

        if (!$id) {
            $model= new Pribadi;
            $model->customer = $request->customer;
            $model->nama_kapal = $request->nama_kapal;
            $model->keberangkatan = $request->keberangkatan;
            $model->nama_kru = $krus;
            $model->tujuan = $request->tujuan;
            $model->nama_penyewa = $request->nama_penyewa;
            $model->mulai_sewa = $request->mulai_sewa;
            $model->sewa_selesai = $request->sewa_selesai;
            $model->harga_sewa_customer = $request->harga_sewa_customer;
            $model->keterangan = $request->keterangan;
            $model->save();
            $request->session()->put('id_kapalpribadi_form', $model->id);
            return response()->json([
                'id' => $model->id
            ]);
        } else {
            Pribadi::where('id', $id)->update([
                'customer' => $customer,
                'nama_kapal' => $nama_kapal,
                'keberangkatan' => $keberangkatan,
                'nama_kru' => $krus,
                'tujuan' => $tujuan,
                'nama_penyewa' => $nama_penyewa,
                'mulai_sewa' => $mulai_sewa,
                'sewa_selesai' => $sewa_selesai,
                'harga_sewa_customer' => $harga_sewa_customer,
                'keterangan' => $keterangan
            ]);
            return response()->json([
                'id' => $id
            ]);
        }
    }

    public function editTablekm($id)
    {
        $pribadi = Pribadi::findorfail($id);
        $data_foto = Uploadgambar::where('id_kapal', $id)->get();
        $data_tujuan =  ['Pelabuhan Tanjung Priok', 'Pelabuhan Tanjung Perak', 'Pelabuhan Ketapang', 'Pelabuhan Harbour Bay', 'Pelabuhan Tanjung Mas', 'Pelabuhan Sunda Kelapa', 'Pelabuhan Sorekarno-Hatta', 'Pelabuhan Merak', 'Pelabuhan Batam-Center','Pelabuhan Bakauheni','Pelabuhan Gorontalo','Pelabuhan Banjarmasin','Pelabuhan Gilimanuk','Pelabuhan Jayapura'];
        $nama_kru = kruModel::all();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.table.editTablekm', ['notifall' => $notifall, 'notif' => $notif, 'pribadi' => $pribadi, 'data_foto' => $data_foto, 'data_tujuan' => $data_tujuan, 'nama_kru' => $nama_kru]);
    }

    public function updateTablekm(Request $request, Pribadi $pribadi, $id )
    {
        $customer=$request->customer;
        $nama_kapal=$request->nama_kapal;
        $keberangkatan=$request->keberangkatan;
        $nama_kru=$request->nama_kru;
        $krus = implode(" - " , $nama_kru);
        $tujuan=$request->tujuan;
        $nama_penyewa=$request->nama_penyewa;
        $mulai_sewa=$request->mulai_sewa;
        $sewa_selesai=$request->sewa_selesai;
        $harga_sewa_customer=$request->harga_sewa_customer;
        $keterangan=$request->keterangan;
        
        $pribadi = Pribadi::findorfail($id);
        $model = Pribadi::findorfail($id);
        
        $model->customer = $request->input('customer');
        $model->nama_kapal = $request->input('nama_kapal');
        $model->keberangkatan = $request->input('keberangkatan');
        $model->nama_kru = $krus;
        $model->tujuan = $request->input('tujuan');
        $model->nama_penyewa = $request->input('nama_penyewa');
        $model->mulai_sewa = $request->input('mulai_sewa');
        $model->sewa_selesai = $request->input('sewa_selesai');
        $model->harga_sewa_customer = $request->input('harga_sewa_customer');
        $model->keterangan = $request->input('keterangan');

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
            'task' => 'Update Data Kapal Pribadi'
            ]);
        return redirect('/page_km')->with('success','Berhasil Update Data');

    }
    public function destroy(Pribadi $pribadi, $id)
    {
        Pribadi::destroy($id);
        Uploadgambar::where('id_kapal', $id)->delete();
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '3',
        'task' => 'Delete Data Kapal Pribadi'
        ]);
        return back()->with('success', 'Berhasil Terhapus');
           
    }

    public function show(Pribadi $pribadi, $id)
     {
        $pribadi = Pribadi::findorfail($id);
        $data_foto = Uploadgambar::where('id_kapal', $id)->get();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        
        return view('admin.table.show_km', ['notifall' => $notifall, 'notif' => $notif, 'pribadi' => $pribadi, 'data_foto' => $data_foto, 'nama_kru' => kruModel::all(),]);
    }

    public function carikm(Request $request)
    {
        $namakapal = $request->nama_kapal;
        $pribadi = Pribadi::where('nama_kapal','like',"%".$namakapal."%")->paginate(5);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.page_km', compact('pribadi'), ['notif' => $notif, 'notifall' => $notifall]);
    }

}
