<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::paginate(10);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        
        return view('admin.vendor',compact('vendor'), ['notif' => $notif, 'notifall' => $notifall]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.table.table_vendor',['notif' => $notif, 'notifall' => $notifall]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $model= new Vendor;
        $model->phone = $request->phone;
        $model->mobile = $request->mobile;
        $model->nama_perusahaan = $request->nama_perusahaan;
        $model->email = $request->email;
        $model->nama_pic = $request->nama_pic;
        $model->website = $request->website;
        $model->jabatan = $request->jabatan;
        $model->provinsi = $request->provinsi;
        $model->kota = $request->kota;
        $model->kecamatan = $request->kecamatan;
        $model->kelurahan = $request->kelurahan;
        $model->rt = $request->rt;
        $model->rw = $request->rw;
        $model->alamat_lengkap = $request->alamat_lengkap;
        

        $phone=$request->phone;
        $mobile=$request->mobile;
        $nama_perusahaan=$request->nama_perusahaan;
        $email=$request->email;
        $nama_pic=$request->nama_pic;
        $website=$request->website;
        $jabatan=$request->jabatan;
        $provinsi=$request->provinsi;
        $kota=$request->kota;
        $kecamatan=$request->kecamatan;
        $keluratan=$request->kelurahan;
        $rt=$request->rt;
        $rw=$request->rw;
        $alamat_lengkap=$request->alamat_lengkap;
        

        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('image-vendor', $nama_file);
            $model->image = $nama_file;
        }
            $model->save();
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '1',
            'task' => 'Add Data Vendor'
            ]);
        
            return redirect('/page_sw/vendor')->with('success','Berhasil Menambah Post');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor , $id)
    {
        $ven= Vendor::findorfail($id);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.table.vendor_edit', compact('ven'),['notif' => $notif, 'notifall' => $notifall]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor, $id)
    {
        $ven= Vendor::findorfail($id);
        $model= Vendor::findorfail($id);
        
        $model->phone = $request->input('phone');
        $model->mobile = $request->input('mobile');
        $model->nama_perusahaan = $request->input('nama_perusahaan');
        $model->email = $request->input('email');
        $model->nama_pic = $request->input('nama_pic');
        $model->website = $request->input('website');
        $model->jabatan = $request->input('jabatan');
        $model->provinsi = $request->input('provinsi');
        $model->kota = $request->input('kota');
        $model->kecamatan = $request->input('kecamatan');
        $model->kelurahan = $request->input('kelurahan');
        $model->rt = $request->input('rt');
        $model->rw = $request->input('rw');
        $model->alamat_lengkap = $request->input('alamat_lengkap');
        

        $phone=$request->phone;
        $mobile=$request->mobile;
        $nama_perusahaan=$request->nama_perusahaan;
        $email=$request->email;
        $nama_pic=$request->nama_pic;
        $website=$request->website;
        $jabatan=$request->jabatan;
        $provinsi=$request->provinsi;
        $kota=$request->kota;
        $kecamatan=$request->kecamatan;
        $keluratan=$request->kelurahan;
        $rt=$request->rt;
        $rw=$request->rw;
        $alamat_lengkap=$request->alamat_lengkap;

        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('image-vendor', $nama_file);
            $model->image = $nama_file;
        }
            $model->update();
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '2',
            'task' => 'Update Data Vendor'
            ]);
        return redirect('/page_sw/vendor')->with('success','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor, $id)
    {
        Vendor::destroy($id);
        $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '3',
            'task' => 'Delete Data Vendor'
            ]);
        return redirect('/page_sw/vendor')->with('success','Berhasil Dihapus!');
    }
}
