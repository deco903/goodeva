<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Carbon\Carbon;
use App\Models\Notifikasi;
use App\models\loginvgmb_m;
use App\models\loginvspn_m;
use Illuminate\Http\Request;
use App\Exports\loginvgmb_mExport;
use App\Exports\loginvspn_mExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class InventoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function indexSpnTgl()
    {
        $data_list = DB::table('inventoryspn')->get();
        $date = Carbon::now()->subDays(7);
        $data = loginvspn_m::where('created_at', '>=', $date)->paginate(10);
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();

        // dd($data);
        return view('admin.inventori.inventorytgl',compact('data','data_list'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function searchListSpn(Request $request)
    {
      $namabrg = $request->nama_barang;
      $data = loginvspn_m::where('nama_barang', 'like', "%" . $namabrg . "%")->get();
      $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
      return view('admin.inventori.inventoryspnlist',compact('data'),['notif' => $notif, 'notifall' => $notifall]);
    }

    //method get
    public function index(Request $request)
    {
        $fromdate = $request->input('fromDate');
        $todate = $request->input('toDate');
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        // $data = \DB::select("SELECT * FROM loginvspn WHERE created_at BETWEEN '$fromdate 00:00:000'AND'$todate 23:59:59'");
        $data = DB::query()
                    ->from('loginvspn')
                    ->whereBetween(\DB::raw('DATE(created_at)'), [$fromdate, $todate])
                    ->get()->paginate(10);
                    
        // $data = DB::table('loginvspn')->select()
        //            ->where('created_at','>=',$fromdate)
        //            ->where('created_at','<=',$todate)
        //            ->get();
        
        // dd($data);
        return view('admin.inventori.inventory',compact('data'),['notif' => $notif, 'notifall' => $notifall]);

    }

    public function indexGmb()
    {
        $data_gmb = DB::table('inventorygmb')->get();
        $date = Carbon::now()->subDays(7);
        $datagmb = loginvgmb_m::where('created_at', '>=', $date)->get();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
       
        // dd($data);
        return view('admin.inventori.inventorygmbtgl',compact('datagmb','data_gmb'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function invGmb(Request $request)
    {

        $fromdate = $request->input('fromDate');
        $todate = $request->input('toDate');
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        //$datagmb = \DB::select("SELECT * FROM loginvgmb WHERE created_at BETWEEN '$fromdate 00:00:000'AND'$todate 23:59:59'");
        $datagmb = DB::query()
        ->from('loginvgmb')
        ->whereBetween(\DB::raw('DATE(created_at)'), [$fromdate, $todate])
        ->get()->paginate(10);
        // $datagmb = DB::table('loginvgmb')->select()
        //             ->where('created_at','>=',$fromdate)
        //             ->where('created_at','<=',$todate)
        //             ->get()->paginate(10);
        return view('admin.inventori.inventorygmb',compact('datagmb'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function searchListGmb(Request $request)
    {
        $namabrg = $request->nama_barang;
        $datagmb = loginvgmb_m::where('nama_barang', 'like', "%" . $namabrg . "%")->get();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $notifall = Notifikasi::all();
        return view('admin.inventori.inventorygmblist',compact('datagmb'),['notif' => $notif, 'notifall' => $notifall]);
    }

    public function cetakinvSpn()
    {
        //$cetakinvspn = loginvspn_m::where('id', $id)->get();
        $cetakinvspn = loginvspn_m::all();
        return view('admin.inventori.cetakinvspn', compact('cetakinvspn'));
    }

    public function cetakinvSpnExcel()
    {
       return Excel::download(new loginvspn_mExport, 'datainvspn.xlsx');
    }

    public function cetakinvGmb()
    {
        //$cetakinvspn = loginvspn_m::where('id', $id)->get();
        $cetakinvgmb = loginvgmb_m::all();
        return view('admin.inventori.cetakinvgmb', compact('cetakinvgmb'));
    }

    public function cetakinvGmbExcel()
    {
       return Excel::download(new loginvgmb_mExport, 'datainvgmb.xlsx');
    }
}
