<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\loginvspn_m;
use App\models\loginvgmb_m;
use App\Exports\loginvspn_mExport;
use DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class InventoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request){

        $fromdate = $request->fromdate;
        $todate = $request->todate;
        
        $data = \DB::select("SELECT * FROM loginvspn WHERE created_at BETWEEN '$fromdate 00:00:000'AND'$todate 23:59:59'");

        // $data = DB::table('loginvspn')
        //      ->where('created_at','>=',$fromdate)
        //      ->where('created_at','<=',$todate)
        //      ->get();
        return view('admin.inventori.inventory',compact('data'));
    }

    public function invGmb(Request $request){

        $fromdate = $request->fromdate;
        $todate = $request->todate;
        
        $datagmb = \DB::select("SELECT * FROM loginvgmb WHERE created_at BETWEEN '$fromdate 00:00:000'AND'$todate 23:59:59'");

        // $data = DB::table('loginvspn')
        //      ->where('created_at','>=',$fromdate)
        //      ->where('created_at','<=',$todate)
        //      ->get();
        return view('admin.inventori.inventorygmb',compact('datagmb'));
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

}
