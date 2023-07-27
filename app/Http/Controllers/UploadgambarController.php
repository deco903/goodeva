<?php

namespace App\Http\Controllers;

use App\Models\Uploadgambar;
use App\Models\Sewa;
use App\Models\Pribadi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Session;

class UploadgambarController extends Controller
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
        // $datagambar = Uploadgambar::latest()->take(1)->get();
        $datagambar = Uploadgambar::all();
        return $datagambar;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $nama_file = $request->nama_file;
        $no_izin = $request->no_izin;
        $jenis_berkas = $request->jenis_berkas;
        $tgl_terbitfile = $request->tgl_terbitfile;
        $tgl_berakhirfile = $request->tgl_berakhirfile;
        $id_kapal = $request->kpid;
        $jenis_kapal = 's';

        if ($id_kapal == '') {
            $parentModel = new Sewa;
            $parentModel->save();
            $id_kapal = $parentModel->id;
        }

        $model= new Uploadgambar;
        $model->id_kapal = $id_kapal;
        $model->jenis_kapal = $jenis_kapal;
        $model->nama_file = $request->nama_file;
        $model->no_izin = $request->no_izin;
        $model->jenis_berkas = $request->jenis_berkas;
        $model->tgl_terbitfile = $request->tgl_terbitfile;
        $model->tgl_berakhirfile = $request->tgl_berakhirfile;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $nama_file = time().str_replace(" ", "-", $file->getClientOriginalName());
            $file->move('post-photo-sewa', $nama_file);
            $model->photo = $nama_file;
        }
        $model->save();
        
        $request->session()->put('id_kapalsewa_form', $id_kapal);

        return redirect()->back()->with('success, Berhasil Simpan Sertifikat');
    }

    public function backFormSewa(Request $request) {
        Uploadgambar::where('id_kapal', $request->session()->get('id_kapalsewa_form'))->delete();
        Sewa::where('id', $request->session()->get('id_kapalsewa_form'))->delete();
        $request->session()->forget('id_kapalsewa_form');
        return redirect('/page_sw');
    }

    public function deleteImage(Request $request) {
        $id = $request->id;
        Uploadgambar::where('id', $id)->delete();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }





//PRIBADI
    public function indexkm()
    {
        // $datagambar = Uploadgambar::latest()->take(1)->get();
        $datagambar = Uploadgambar::all();
        return $datagambar;
    }

    public function storekm(Request $request)
    {
        // dd($request->all());
        $nama_file = $request->nama_file;
        $no_izin = $request->no_izin;
        $jenis_berkas = $request->jenis_berkas;
        $tgl_terbitfile = $request->tgl_terbitfile;
        $tgl_berakhirfile = $request->tgl_berakhirfile;
        $id_kapal = $request->kpid;
        $jenis_kapal = 'p';

        if ($id_kapal == '') {
            $parentModel = new Pribadi;
            $parentModel->save();
            $id_kapal = $parentModel->id;
        }

        $model= new Uploadgambar;
        $model->id_kapal = $id_kapal;
        $model->jenis_kapal = $jenis_kapal;
        $model->nama_file = $request->nama_file;
        $model->no_izin = $request->no_izin;
        $model->jenis_berkas = $request->jenis_berkas;
        $model->tgl_terbitfile = $request->tgl_terbitfile;
        $model->tgl_berakhirfile = $request->tgl_berakhirfile;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $nama_file = time().str_replace(" ", "-", $file->getClientOriginalName());
            $file->move('post-photo-pribadi', $nama_file);
            $model->photo = $nama_file;
        }
        $model->save();
        
        $request->session()->put('id_kapalpribadi_form', $id_kapal);

        return redirect()->back()->with('success, Berhasil Simpan Sertifikat');
    }

    public function editkm(Request $request)
    {
        // dd($request->all());
        $nama_file = $request->nama_file;
        $no_izin = $request->no_izin;
        $jenis_berkas = $request->jenis_berkas;
        $tgl_terbitfile = $request->tgl_terbitfile;
        $tgl_berakhirfile = $request->tgl_berakhirfile;
        $id_kapal = $request->kpid;
        $jenis_kapal = 'p';

        if ($id_kapal == '') {
            $parentModel = new Pribadi;
            $parentModel->save();
            $id_kapal = $parentModel->id;
        }

        $model= new Uploadgambar;
        $model->id_kapal = $id_kapal;
        $model->jenis_kapal = $jenis_kapal;
        $model->nama_file = $request->nama_file;
        $model->no_izin = $request->no_izin;
        $model->jenis_berkas = $request->jenis_berkas;
        $model->tgl_terbitfile = $request->tgl_terbitfile;
        $model->tgl_berakhirfile = $request->tgl_berakhirfile;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $nama_file = time().str_replace(" ", "-", $file->getClientOriginalName());
            $file->move('post-photo-pribadi', $nama_file);
            $model->photo = $nama_file;
        }
        $model->save();
        
        $request->session()->put('id_kapalpribadi_form', $id_kapal);

        return back()->with('success, Berhasil Simpan Sertifikat');
    }

    public function backFormPribadi(Request $request) {
        Uploadgambar::where('id_kapal', $request->session()->get('id_kapalpribadi_form'))->delete();
        Pribadi::where('id', $request->session()->get('id_kapalpribadi_form'))->delete();
        $request->session()->forget('id_kapalpribadi_form');
        return redirect('/page_km');
    }

    public function deleteImagekm(Request $request) {
        $id = $request->id;
        Uploadgambar::where('id', $id)->delete();
        return back();
    }
}
