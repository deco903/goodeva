<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Models\customergmbModel; 
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class custGmbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function customer_gmb()
    {
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        $customergmb = customergmbModel::paginate(10);
        return view('admin.inventori.customer_gmb', compact('customergmb'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function customer_gmb_store(Request $request)
    {
             
        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stock' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'total_stock' => 'required',
            'text' => 'required',
        ]);

        $nama_barang = $request->nama_barang;
        $harga_beli = $request->harga_beli;
        $harga_jual = $request->harga_jual;
        $stock = $request->stock;
        $unit = $request->unit;
        $type = $request->type;
        $total_stock = $request->total_stock;
        $text = $request->text;

        $customer_gmb = new customergmbModel();
        $customer_gmb->nama_barang = $nama_barang;
        $customer_gmb->harga_beli = $harga_beli;
        $customer_gmb->harga_jual = $harga_jual;
        $customer_gmb->stock = $stock;
        $customer_gmb->unit = $unit;
        $customer_gmb->type = $type;
        $customer_gmb->total_stock = $total_stock;
        $customer_gmb->text = $text;
        
           // dd($customer_gmb);
           $user = Auth::user();

           Notifikasi::create([
           'user_id' => $user->id,
           'log_id' => '1',
           'task' => 'Add Data Inventori Customer GBM'
           ]);
        if($customer_gmb->save()){
            return redirect()->back()->with('pesan','Data Customer GMB sudah masuk....!!!');
        }else{
            return redirect()->back()->with('pesan','Data Customer GMB belum masuk....!!!');
        }

    }

    public function cust_edit(Request $request, $id=null)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'unit' => 'required',
            'type' => 'required',
            'total_stock' => 'required',
            'text' => 'required',
        ]); 
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '2',
        'task' => 'Update Data Inventori Customer GBM'
        ]);
        if($request->isMethod('post')){
            $data = $request->all(); 
   
               customergmbModel::where(['id'=>$id])->update(['nama_barang'=>$data['nama_barang'],'harga_beli'=>$data['harga_beli'],'harga_jual'=>$data['harga_jual'],'stock'=>$data['stock'],'unit'=>$data['unit'],'type'=>$data['type'],'total_stock'=>$data['total_stock'],'text'=>$data['text']]);
               return redirect()->back()->with('pesan','data berhasil dirubah..!!');
           }
    }

    public function cust_update(Request $request, $id=null)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'stock' => 'required',
            'choose' => 'required',
            'update_stock' => 'required',
            'text' => 'required',
        ]);

      if($request->isMethod('post')){
         $res_cus = $request->all(); 

         
        //   dd($res);
            customergmbModel::where(['id'=>$id])->update(['choose'=>$res_cus['choose'],'update_stock'=>$res_cus['update_stock'],'total_stock'=>$res_cus['total_stock'],'text'=>$res_cus['text']]);
            $user = Auth::user();

            Notifikasi::create([
            'user_id' => $user->id,
            'log_id' => '2',
            'task' => 'Update Data Inventori Customer GBM'
            ]);
            return redirect()->back()->with('pesan','data berhasil dirubah..!!');

        }
    }

    public function cariCustGmb(Request $request)
    {
       $namakapal = $request->nama_barang;
       $customergmb = customergmbModel::where('nama_barang','like',"%".$namakapal."%")->paginate(2);
               $notifall = Notifikasi::all();
       $notif = Notifikasi::all();
       return view('admin.inventori.customer_gmb', compact('customergmb'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function delete($id=null)
    {
        customergmbModel::where(['id'=>$id])->delete();
        $user = Auth::user();

        Notifikasi::create([
        'user_id' => $user->id,
        'log_id' => '3',
        'task' => 'Delete Data Inventori Customer GBM'
        ]);
        return redirect()->back()->with('pesan','data berhasil dihapus..!!');
    }

}
