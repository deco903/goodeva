<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customergmbModel; 

class custGmbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function customer_gmb()
    {
        $customergmb = customergmbModel::paginate(10);
        return view('admin.inventori.customer_gmb', compact('customergmb'));
    }

    public function customergmbStore(request $request)
    {
             
        $validated = $request->validate([
            'nama_kapal' => 'required',
            'nama_barang' => 'required',
            'pcs' => 'required',
        ]);

        $nama_kapal = $request->nama_kapal;
        $nama_barang = $request->nama_barang;
        $pcs = $request->pcs;

        $customer_gmb = new customergmbModel();
        $customer_gmb->nama_kapal = $nama_kapal;
        $customer_gmb->nama_barang = $nama_barang;
        $customer_gmb->pcs = $pcs;
        $customer_gmb->save();

        return redirect()->back()->with('pesan','Data Customer GMB sudah masuk....!!!');

    }

    public function cariCustGmb(Request $request)
    {
       $namakapal = $request->nama_kapal;
       $customergmb = customergmbModel::where('nama_kapal','like',"%".$namakapal."%")->paginate(2);
       return view('admin.inventori.customer_gmb', compact('customergmb'));
    }

}
