<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Notifikasi;
use App\Models\loginvspn_m;
use App\Models\inventoryspn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SpnController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inventori_spn()
    {
        $spn = inventoryspn::paginate(10);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.inventori.inventori_spn', compact('spn'),['notif' => $notif, 'notifall' => $notifall]);
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

        $inventory_spn = new inventoryspn();
        $inventory_spn->nama_barang = $nama_barang;
        $inventory_spn->harga = $harga;
        $inventory_spn->stock = $stock;
        $inventory_spn->unit = $unit;
        $inventory_spn->type = $type;
        $inventory_spn->total_stock = $total_stock;
        $inventory_spn->text = $text;
        $inventory_spn->save();

        // dd($inventory_spn);
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '1',
        'task' => 'Add Data Inventori SPN'
        ]);
        return redirect()->back()->with('pesan','Input Inventori SPN Berhasil....!!!');
       
    }

    public function cetakSpn($id)
    {
        // $cetakspn = inventoryspn::all();
        $cetakspn = inventoryspn::where('id', $id)->get();
        view()->share('cetakspn',$cetakspn);
        $pdf = PDF::loadview('admin.inventori.cetak-spn');
        return $pdf->download('data.pdf');
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

        //  dd($data);
            inventoryspn::where(['id'=>$id])->update(['nama_barang'=>$data['nama_barang'],'harga'=>$data['harga'],'stock'=>$data['stock'],'unit'=>$data['unit'],'type'=>$data['type'],'total_stock'=>$data['total_stock'],'text'=>$data['text']]);
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '2',
            'task' => 'Update Data Inventori SPN'
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
         $res = $request->all(); 

        //   dd($res);
            inventoryspn::where(['id'=>$id])->update(['choose'=>$res['choose'],'update_stock'=>$res['update_stock'],'total_stock'=>$res['total_stock'],'text'=>$res['text']]);
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '2',
            'task' => 'Update Data Stok Inventori SPN'
            ]);
            return redirect()->back()->with('pesan','data berhasil dirubah..!!');

        }

    }

    public function delete($id=null)
    {
        inventoryspn::where(['id'=>$id])->delete();
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '3',
        'task' => 'Delete Data Inventori SPN'
        ]);
        return redirect()->back()->with('pesan','data berhasil dihapus..!!');
    }

    public function cariSpn(Request $request)
    {
        $namabrg = $request->nama_barang;
        $spn = inventoryspn::where('nama_barang','like',"%".$namabrg."%")->paginate(2);
        $notifall = Notifikasi::all();
        return view('admin.inventori.inventori_spn', compact('spn'),['notif' => $notif, 'notifall' => $notifall]);
    }

}
