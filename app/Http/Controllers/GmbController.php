<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\loginvgmb_m;
use App\Models\inventorygmb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class GmbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function inventori_gmb(){
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        $gmb = inventorygmb::paginate(10);
        return view('admin.inventori.inventori_gmb', compact('gmb'),['notif' => $notif, 'notifall' => $notifall]);
    }

    
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'stock' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'total_stock' => 'required',
            'text' => 'required',
        ]);

        $nama_barang = $request->nama_barang;
        $harga = $request->harga;
        $stock = $request->stock;
        $unit = $request->unit;
        $type = $request->type;
        $total_stock = $request->total_stock;
        $text = $request->text;

        $inventory_gmb = new inventorygmb();
        $inventory_gmb->nama_barang = $nama_barang;
        $inventory_gmb->harga = $harga;
        $inventory_gmb->stock = $stock;
        $inventory_gmb->unit = $unit;
        $inventory_gmb->type = $type;
        $inventory_gmb->total_stock = $total_stock;
        $inventory_gmb->text = $text;
        $inventory_gmb->save();

        // dd($inventory_spn);
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '1',
        'task' => 'Add Data Inventori GBM'
        ]);
        return redirect()->back()->with('pesan','Input Inventori GMB Berhasil....!!!');
       
    }


    public function edit(Request $request, $id=null)
    {

        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'unit' => 'required',
            'type' => 'required',
            'total_stock' => 'required',
            'text' => 'required',
        ]); 

      if($request->isMethod('post')){
         $data = $request->all(); 
         $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
            inventorygmb::where(['id'=>$id])->update(['nama_barang'=>$data['nama_barang'],'harga'=>$data['harga'],'stock'=>$data['stock'],'unit'=>$data['unit'],'type'=>$data['type'],'total_stock'=>$data['total_stock'],'text'=>$data['text']]);
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '2',
            'task' => 'Update Data Inventori GBM'
            ]);
            return redirect()->back()->with('pesan','data berhasil dirubah..!!');
        }

    }

    public function editUpdate(Request $request, $id=null)
    {

        $validated = $request->validate([
            'nama_barang' => 'required',
            'stock' => 'required',
            'choose' => 'required',
            'update_stock' => 'required',
            'text' => 'required',
        ]);

      if($request->isMethod('post')){
         $res_gmb = $request->all(); 

        //   dd($res);
            inventorygmb::where(['id'=>$id])->update(['choose'=>$res_gmb['choose'],'update_stock'=>$res_gmb['update_stock'],'total_stock'=>$res_gmb['total_stock'],'text'=>$res_gmb['text']]);
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '2',
            'task' => 'Update Data Stok Inventori GBM'
            ]);
            return redirect()->back()->with('pesan','data berhasil dirubah..!!');

        }

    }

    public function delete($id=null)
    {
        inventorygmb::where(['id'=>$id])->delete();
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '3',
        'task' => 'Delete Data Inventori GBM'
        ]);
        return redirect()->back()->with('pesan','data berhasil dihapus..!!');
    }

    public function cariGmb(Request $request)
    {
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        $namabrg = $request->nama_barang;
        $gmb = inventorygmb::where('nama_barang','like',"%".$namabrg."%")->paginate(2);
        return view('admin.inventori.inventori_gmb', compact('gmb'),['notif' => $notif, 'notifall' => $notifall]);
    }

}
