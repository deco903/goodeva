<?php

namespace App\Http\Controllers;

use App\Models\Uploadgambar;
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
        $datagambar = Uplaodgambar::latest()->get();
        return view('admin.table.table_sw');
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
        dd($request->all());
        // $photo_data = '';

        // for($idx=0; $idx < count($request->nama_file); $idx++) {
        //     // $validateData = $request->validate([
        //     //     'photo' => 'required|mimes:jpg,jpeg,png',
        //     //     'nama_file' => 'required',
        //     //     'no_izin' => 'required',
        //     //     'tgl_terbitfile' => 'required',
        //     //     'tgl_berakhirfile' => 'required',
        //     // ]);
        //     $file_name = $request->photo[$idx]->getClientOriginalName();
        //     $image = $request->photo[$idx]->storeAs('thumbnail', $file_name);
        //     $array = '[' +
        //         '\'photo\' =>' + $request->photo[$idx] + ',' +
        //         '\'nama_file\' =>' + $request->nama_file[$idx] + ',' +
        //         '\'no_izin\' =>' + $request->no_izin[$idx] + ',' +
        //         '\'tgl_terbitfile\' =>' + $request->tgl_terbitfile[$idx] + ',' +
        //         '\'tgl_berakhirfile\' =>' + $request->tgl_berakhirfile[$idx] + ',' +
        //     '], ';
        //     $photo_data += $array;
        // }

        // Session::push("PHOTO_DATA", $photo_data);

        // Uploadgambar::create([
        //     'photo' => $image,
        //     'nama_file' => $request->nama_file,
        //     'no_izin' => $request->no_izin,
        //     'tgl_terbitfile' => $request->tgl_terbitfile,
        //     'tgl_berakhirfile' => $request->tgl_berakhirfile,

        // ]);

        // $validateData = $request->validate([
        //             'photo' => 'required|mimes:jpg,jpeg,png',
        //             'nama_file' => 'required',
        //             'no_izin' => 'required',
        //             'tgl_terbitfile' => 'required',
        //             'tgl_berakhirfile' => 'required',
        //         ]);

        // $file_name = $request->photo[$idx]->getClientOriginalName();
        // $image = $request->photo[$idx]->storeAs('thumbnail', $file_name);

        // Gambar::create([
        //         'photo' => $image,
        //         'nama_file' => $request->nama_file,
        //         'no_izin' => $request->no_izin,
        //         'tgl_terbitfile' => $request->tgl_terbitfile,
        //         'tgl_berakhirfile' => $request->tgl_berakhirfile,
    
        //     ]);
        // return redirect('page_sw/table_sw')->with('success','Sudah di simpan');
 
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
}
