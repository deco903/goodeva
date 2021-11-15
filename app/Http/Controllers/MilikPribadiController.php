<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pribadi;
use App\Models\Gambar;
use App\Models\kruModel;
USE Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MilikPribadiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $pribadi = Pribadi::all();
        return view('admin.page_km', compact('pribadi'));
    }

    public function table_km(Request $request){
        return view('admin.table.table_km');
    }
    
    public function storeTablekm(Request $request)
    {
     // dd($request->all());
     $model= new Pribadi;
     $model->no = $request->no;
     $model->keberangkatan = $request->keberangkatan;
     $model->nama_kapal = $request->nama_kapal;
     $model->tujuan = $request->tujuan;
     $model->nama_kru = $request->nama_kru;
     $model->mulai_sewa = $request->mulai_sewa;
     $model->nama_penyewa = $request->nama_penyewa;
     $model->sewa_selesai = $request->sewa_selesai;
     $model->keterangan = $request->keterangan;
     

     $no = $request->no;
     $keberangkatan = $request->keberangkatan;
     $nama_kapal = $request->nama_kapal;
     $tujuan = $request->tujuan;
     $nama_kru = $request->nama_kru;
     $mulai_sewa = $request->mulai_sewa;
     $nama_penyewa = $request->nama_penyewa;
     $sewa_selesai = $request->sewa_selesai;
     $keterangan = $request->keterangan;

     
     if($request->file('image')){
         $file = $request->file('image');
         $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
         $file->move('post-image-pribadi', $nama_file);
         $model->image = $nama_file;
     }
     $model->save();
     return redirect('/page_km')->with('success, Berhasil Simpan');
     

    }

    public function storePhoto(Request $request){

        
     $validated = $request->validate([
        'nama_file' => 'required',
        'no_izin' => 'required',
        'tgl_terbitfile' => 'required',
        'tgl_berakhirfile' => 'required',
        'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
    ]);


        $image = $request->file('photo');
        $imageName = Request()->nama_file.'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads1/img'),$imageName);
        $nama_file = $request->nama_file;
        $no_izin = $request->no_izin;
        $tgl_terbitfile = $request->tgl_terbitfile;
        $tgl_berakhirfile = $request->tgl_berakhirfile;


        // $gambar = new Gambar();
        // $gambar->nama_file = $nama_file;
        // $gambar->no_izin = $no_izin;
        // $gambar->tgl_terbitfile = $tgl_terbitfile;
        // $gambar->tgl_berakhirfile = $tgl_berakhirfile;
        // $gambar->photo = $imageName;

        // dd($gambar);
        $dataImg = [
            'nama_file' => $nama_file,
            'no_izin' => $no_izin,
            'tgl_terbit' => $tgl_terbitfile,
            'tgl_berakhir' => $tgl_berakhirfile,
            'photo' => $imageName
        ];
        $request->session()->put('dataImg', $dataImg);
        // if($gambar->save()){
            return redirect()->back()->with('pesan','data sertifikat berhasil ditambah');
        // }else{
        //     return redirect()->back()->with('pesan','data gagal di inputkan'); 
        // }
    }

    public function editTablekm($id)
    {
        $pribadi = Pribadi::findorfail($id);
        return view('admin.table.editTablekm', compact('pribadi'));
    }

    public function updateTablekm(Request $request)
    {
        $validated = $request->validate([
            'nama_kapal' => 'required',
            'keberangkatan' => 'required',
            'kru_kapal' => 'required',
            'tujuan' => 'required',
            'nama_penyewa' => 'required',
            'tgl_keberangkatan' => 'required',
            'sertifikat' => 'required',
            'tgl_tiba' => 'required',
            'keterangan' => 'required',

        ]);

        $pribadi = Pribadi::find($request->id);

        $pribadi_data = [
            'nama_kapal' => $request->nama_kapal, 
            'keberangkatan' => $request->keberangkatan,
            'kru_kapal' => $request->kru_kapal, 
            'tujuan' => $request->tujuan,
            'nama_penyewa' => $request->nama_penyewa, 
            'tgl_keberangkatan' => $request->tgl_keberangkatan,
            'sertifikat' => $request->sertifikat, 
            'tgl_tiba' => $request->tgl_tiba,

        ];

    }
    public function destroy(Pribadi $pribadi, $id)
    {
        Pribadi::destroy($id);
        return back()->with('success', 'Berhasil Terhapus');
    }

    //Kru
    
    public function kru(){
        $kru = kruModel::paginate(2);
        return view('admin.kru',compact('kru'));
    }

    public function table_kru(){
        return view ('admin.table.table_kru');
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

        $kru->save();

        // dd($kru);

        return redirect()->route('kru')->with('pesan','Data Berhasil di Input');

    }

    public function resetSession($key) {
        if (Session::has($key)) {
            Session::forget($key);
        }
    }
}
