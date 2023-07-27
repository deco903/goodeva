<?php

namespace App\Http\Controllers;

use App\Models\kruModel;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class KruController extends Controller
{
    public function kru(){
        $kru = kruModel::paginate(20);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.kru',compact('kru'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function table_kru(){
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view ('admin.table.table_kru',['notif' => $notif, 'notifall' => $notifall]);
    }

    public function storeKru(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
            'phone' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'nama_sertifikat' => 'required',
            'no_sertifikat' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_gabung' => 'required',
            'identitas' => 'required',
            'no_identitas' => 'required',
            'status' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'alamat' => 'required',
            'status_perkawinan' => 'required',
            'npwp' => 'required',
            'jabatan' => 'required',
        ]);


        $image = $request->file('photo');
        $imageName = Request()->nama.'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/img_kru'),$imageName);
        $phone = $request->phone;
        $nama = $request->nama;
        $email = $request->email;
        $tempat_lahir = $request->tempat_lahir;
        $tgl_lahir = $request->tgl_lahir;
        $nama_sertifikat = $request->nama_sertifikat;
        $no_sertifikat = $request->no_sertifikat;
        $jenis_kelamin = $request->jenis_kelamin;
        $tgl_gabung = $request->tgl_gabung;
        $identitas = $request->identitas;
        $no_identitas = $request->no_identitas;
        $status = $request->status;
        $provinsi = $request->provinsi;
        $kota = $request->kota;
        $kecamatan = $request->kecamatan;
        $kelurahan = $request->kelurahan;
        $rt = $request->rt;
        $rw = $request->rw;
        $alamat = $request->alamat;
        $sign_off = $request->sign_off;
        $status_perkawinan = $request->status_perkawinan;
        $npwp = $request->npwp;
        $jabatan = $request->jabatan; 

        $kru = new kruModel();
        $kru->photo = $imageName;
        $kru->phone = $phone;
        $kru->nama = $nama;
        $kru->email = $email;
        $kru->tempat_lahir = $tempat_lahir;
        $kru->tgl_lahir = $tgl_lahir;
        $kru->nama_sertifikat = $nama_sertifikat;
        $kru->no_sertifikat = $no_sertifikat;
        $kru->jenis_kelamin = $jenis_kelamin;
        $kru->tgl_gabung = $tgl_gabung;
        $kru->identitas = $identitas;
        $kru->no_identitas = $no_identitas;
        $kru->status = $status;
        $kru->provinsi = $provinsi;
        $kru->kota = $kota;
        $kru->kecamatan = $kecamatan;
        $kru->kelurahan = $kelurahan;
        $kru->rt = $rt;
        $kru->rw = $rw;
        $kru->alamat = $alamat;
        $kru->sign_off = $sign_off;
        $kru->status_perkawinan = $status_perkawinan;
        $kru->npwp = $npwp;
        $kru->jabatan = $jabatan;

        if($kru->save()){
              return redirect()->route('kru')->with('pesan','Data Berhasil di Input');
        }else{
            return redirect()->route('kru')->with('pesan','Data Gagal di Input');
        }
      

        // dd($kru);
        
      

    }

    public function editKru($id)
    {
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        $editkru = kruModel::find($id);
        return view('admin.kruedit',compact('editkru','notif','notifall'));
    }

    public function updateKru(Request $request,$id)
    {
        $model= kruModel::findorfail($id);
        
        $model->phone = $request->input('phone');
        $model->nama = $request->input('nama');
        $model->email = $request->input('email');
        $model->tempat_lahir = $request->input('tempat_lahir');
        $model->tgl_lahir = $request->input('tgl_lahir');
        $model->no_bpjs_tk = $request->input('no_bpjs_tk');
        $model->no_bpjs_kes = $request->input('no_bpjs_kes');
        $model->jenis_kelamin = $request->input('jenis_kelamin');
        $model->tgl_gabung = $request->input('tgl_gabung');
        $model->identitas = $request->input('identitas');
        $model->no_identitas = $request->input('no_identitas');
        $model->status = $request->input('status');
        $model->provinsi = $request->input('provinsi');
        $model->kota = $request->input('kota');
        $model->kecamatan = $request->input('kecamatan');
        $model->kelurahan = $request->input('kelurahan');
        $model->rt = $request->input('rt');
        $model->rw = $request->input('rw');
        $model->alamat = $request->input('alamat');
        $model->sign_off = $request->input('sign_off');
        $model->status_perkawinan = $request->input('status_perkawinan');
        $model->npwp = $request->input('npwp');
        $model->jabatan = $request->input('jabatan');
        
        $model->update();
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '2',
        'task' => 'Update Data Kru Kapal'
        ]);
        
        return redirect()->route('kru')->with('pesan','Data Berhasil di Update');
    }

    public function cariKru(Request $request)
    {
        $namakru = $request->nama;
        $kru = kruModel::where('nama','like',"%".$namakru."%")->paginate(2);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.kru',compact('kru'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function resetSession($key) {
        if (Session::has($key)) {
            Session::forget($key);
        }
    }

    public function destroy(kruModel $krumodel, $id)
    {
        kruModel::destroy($id);
        
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '3',
        'task' => 'Delete Data Kru'
        ]);
        return back()->with('success', 'Berhasil Terhapus');
           
    }


}
