<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pribadi;
use Illuminate\Support\Facades\DB;
use App\Models\EventModel;
use App\Models\textModel;
use App\Models\Sewa;
use \Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('kapal_pribadi')->paginate(5);
        $count = Pribadi::where('nama_kapal')->count();
        // $onDKP= Pribadi::whereDate('')
        $notif = Notifikasi::all();
        $notif = Notifikasi::with('users')->orderBy('created_at','desc')->paginate(5);
        $today = Carbon::now()->toDateString('Y-m-d');
        $onDKP = Pribadi::whereDate('sewa_selesai','>=', Carbon::now())
                        ->whereDate('mulai_sewa','<=',Carbon::now())
                ->count();
        $onIdle = Pribadi::whereDate('mulai_sewa','>', Carbon::now() )->count();
        $sum = Pribadi::distinct()
                ->count('nama_kapal');
        $notifall = Notifikasi::all();
                // return view('admin.home', ['notif' => $notif, 'notifall' => $notifall]);
                // dd($sum);
                // $data['kapalpribadi'] = $kapalpribadi->build();
        return view('admin.home', compact('data','count','notif','notifall','onDKP','sum','onIdle'));
    }
   
    public function history_km(){
        return view('admin.history_km');
    }

    public function chart(){
        $result = DB::select(DB::raw("select count(*) as total_kapal,
         nama_kapal from kapal_pribadi group by nama_kapal"));
         //dd($result);
         $chartData="";
         foreach($result as $list){
            $chartData.="['".$list->nama_kapal."',  ".$list->total_kapal."],";
         }
         $arr['chartData']=rtrim($chartData,",");
        return view('admin.chart',$arr);
    }

    public function chart1(){
        $result = DB::select(DB::raw("select count(*) as jam_user_input,
        created_at from kapal_pribadi group by created_at"));
        //dd($result);
        $chartData="";
        foreach($result as $list){
           $chartData.="['".$list->created_at."',  ".$list->jam_user_input."],";
        }
        $arr['chartData']=rtrim($chartData,",");
        return view('admin.chartrpm',$arr);
    }

    public function chart2(){
        $result = DB::select(DB::raw("select count(*) as total_kapal,
        nama_kapal from kapal_pribadi group by nama_kapal"));
        //dd($result);
        $chartData="";
        foreach($result as $list){
           $chartData.="['".$list->nama_kapal."',  ".$list->total_kapal."],";
        }
        $arr['chartData']=rtrim($chartData,",");
        return view('admin.chartcircle',$arr);
    }

    public function chart3(){
        $result = DB::select(DB::raw("select count(*) as data_pertahun_2021,
        mulai_sewa from kapal_pribadi group by mulai_sewa"));
        //dd($result);
        $chartData="";
        foreach($result as $list){
           $chartData.="['".$list->mulai_sewa."',  ".$list->data_pertahun_2021."],";
        }
        $arr['chartData']=rtrim($chartData,",");
        return view('admin.chartline',$arr);
    }



    public function inventory(){
        return view('admin.inventory');
    }

    public function calenderPribadi(Request $request){
        $start =  $request->start;
        $end   = $request->end;
        if ($request->ajax()) {


            // For Kapal Pribadi
            $ks = Sewa::get(['id','nama_kapal','tgl_berangkat','tgl_datang']);
            // For Kapal Sewa

            $kp = Pribadi::get(['id','nama_kapal','mulai_sewa','sewa_selesai']);
         
        }
        $data=[];

        //Loop For Kapal Sewa
        foreach ($ks as $k) {
             $res = [
                'backgroundColor'=>'rgb(126, 211, 33)',
                'type' =>'kapal_sewa',
                'title' => $k->nama_kapal,
                'start'  => $k->tgl_berangkat,
                'end'    =>$k->tgl_datang. "T23:59:00",
                'id'    => $k->id,
                
            ];
            array_push($data, $res);
        }
        //Loop For Kapal Pribadi 
        foreach ($kp as $k) {
        
            $res = [
                'backgroundColor'=>'rgb(89, 59, 219)',
                'type' =>'kapal_pribadi',
               'title' => $k->nama_kapal,
               'start'  => $k->mulai_sewa,
               'end'    =>$k->sewa_selesai. "T23:59:00" ,
               'id'    => $k->id,
           ];
          
        array_push($data, $res);
       }
        return response()->json($data);
    }

    public function inputText(Request $request)
    {
        $validated = $request->validate([
            'note' => 'required',
           
        ]);

        $note = $request->note;

        $txt = new textModel();
        $txt->note = $note;

        $txt->save();

        return redirect()->back();
    }
 
}
