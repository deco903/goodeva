<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventoryspn;
use PDF;

class SpnController extends Controller
{
    public function inventori_spn(){
        $spn = inventoryspn::paginate(2);
        // $spnupdate = inventoryspn::all();
        return view('admin.inventori.inventori_spn', compact('spn'));
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

        $inventory_spn = new inventoryspn();
        $inventory_spn->nama_barang = $nama_barang;
        $inventory_spn->stock = $stock;
        $inventory_spn->unit = $unit;
        
        $inventory_spn->type = $type;
        $inventory_spn->total_stock = $total_stock;
        $inventory_spn->text = $text;
        $inventory_spn->save();

        // dd($inventory_spn);

        return redirect()->back();
       
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
            'stock' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'total_stock' => 'required',
            'text' => 'required',
        ]);

        if($request->isMethod('post')){
            $data = $request->all();

            // dd($data);
            inventoryspn::where(['id'=>$id])->update(['nama_barang'=>$data['nama_barang'],'stock'=>$data['stock'],'unit'=>$data['unit'],'type'=>$data['type'],'total_stock'=>$data['total_stock'],'text'=>$data['text']]);

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
            return redirect()->back()->with('pesan','data berhasil dirubah..!!');

        }

    }

    public function delete($id=null)
    {
        inventoryspn::where(['id'=>$id])->delete();
        return redirect()->back()->with('pesan','data berhasil dihapus..!!');
    }
}