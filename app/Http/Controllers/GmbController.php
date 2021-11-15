<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventorygmb;

class GmbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function inventori_gmb(){
        $gmb = inventorygmb::paginate(2);
        return view('admin.inventori.inventori_gmb', compact('gmb'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama_barang' => 'required',
            'stock' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'total_stock' => 'required',
            'text' => 'required',
        ]);

        $nama_barang = $request->nama_barang;
        $stock = $request->stock;
        $unit = $request->unit;
        $type = $request->type;
        $total_stock = $request->total_stock;
        $text = $request->text;

        $inventory_gmb = new inventorygmb();
        $inventory_gmb->nama_barang = $nama_barang;
        $inventory_gmb->stock = $stock;
        $inventory_gmb->unit = $unit;
        $inventory_gmb->type = $type;
        $inventory_gmb->total_stock = $total_stock;
        $inventory_gmb->text = $text;
        $inventory_gmb->save();

        // dd($inventory_spn);

        return redirect()->back();
       
    }


    public function edit(Request $request, $id=null)
    {


      if($request->isMethod('post')){
         $data = $request->all(); 

            inventorygmb::where(['id'=>$id])->update(['nama_barang'=>$data['nama_barang'],'stock'=>$data['stock'],'unit'=>$data['unit'],'type'=>$data['type'],'total_stock'=>$data['total_stock'],'text'=>$data['text']]);
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
            return redirect()->back()->with('pesan','data berhasil dirubah..!!');

        }

    }

    public function delete($id=null)
    {
        inventorygmb::where(['id'=>$id])->delete();
        return redirect()->back()->with('pesan','data berhasil dihapus..!!');
    }

    

}
