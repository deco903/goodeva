<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\agencyModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class agencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = agencyModel::paginate(10);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('agenci.agency', compact('data'),['notif' => $notif, 'notifall' => $notifall]);
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
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '1',
        'task' => 'Add Data Agency'
        ]);
        if($agency->save()){
            return redirect()->back()->with('pesan','Data agency sudah di input...!!!');
        }else{
            return redirect()->back()->with('pesan','Data agency gagal di input..!!!');
        }

    }

    public function editAgency(Request $request, $id=null)
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

        if($request->isMethod('post')){
            $data = $request->all(); 
   
           //  dd($data);
               agencyModel::where(['id'=>$id])->update(['nama_kapal'=>$data['nama_kapal'],
                                                       'voy'=>$data['voy'],
                                                       'bendera'=>$data['bendera'],
                                                       'gt'=>$data['gt'],
                                                       'port_asal'=>$data['port_asal'],
                                                       'tgl_kedatangan'=>$data['tgl_kedatangan'],
                                                       'muatan_bongkar'=>$data['muatan_bongkar'],
                                                       'jenis_muatan'=>$data['jenis_muatan'],
                                                       'tgl_keberangkatan'=>$data['tgl_keberangkatan'],
                                                       'tujuan'=>$data['tujuan'],
                                                       'muatan'=>$data['muatan'],
                                                       'detail'=>$data['detail'],
                                                       'keterangan'=>$data['keterangan']
                                                    ]);
                                                    
               return redirect()->back()->with('pesan','data berhasil dirubah..!!');
           }

    }

    public function updateAgency(Request $request, $id=null)
    {

        // dd($request->all());
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

        if($request->isMethod('post')){
            $data = $request->all(); 
   
           //  dd($data);
               agencyModel::where(['id'=>$id])->update(['nama_kapal'=>$data['nama_kapal'],
                                                       'voy'=>$data['voy'],
                                                       'bendera'=>$data['bendera'],
                                                       'gt'=>$data['gt'],
                                                       'port_asal'=>$data['port_asal'],
                                                       'tgl_kedatangan'=>$data['tgl_kedatangan'],
                                                       'muatan_bongkar'=>$data['muatan_bongkar'],
                                                       'jenis_muatan'=>$data['jenis_muatan'],
                                                       'tgl_keberangkatan'=>$data['tgl_keberangkatan'],
                                                       'tujuan'=>$data['tujuan'],
                                                       'muatan'=>$data['muatan'],
                                                       'detail'=>$data['detail'],
                                                       'keterangan'=>$data['keterangan']
                                                    ]);

               return redirect()->back()->with('pesan','data berhasil dirubah..!!');
           }

    }

    public function agencyDelete($id=null)
    {
        // dd($request->all());
        agencyModel::where(['id'=>$id])->delete();
        return redirect()->back()->with('pesan','data berhasil dihapus..!!');
    }

    public function search(Request $request)
    {
        $agency = $request->nama_kapal;
        $data = agencyModel::where('nama_kapal','like',"%".$agency."%")->paginate(100);
        $notif = Notifikasi::all();
        return view('agenci.agency', compact('data'),['notif' => $notif, 'notifall' => $notifall]);
    }
}
