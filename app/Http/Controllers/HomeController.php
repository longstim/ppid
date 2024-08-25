<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
Use Redirect;
use Auth;

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
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $open_permohonan = DB::table('td_permohonan_informasi')
                        ->where('is_process','=','no')
                        ->where('is_solved','=',null)
                        ->where('is_cancel','=',null)
                        ->count();

        $process_permohonan = DB::table('td_permohonan_informasi')
                        ->where('is_process','=','yes')
                        ->where('is_solved','=',null)
                        ->where('is_cancel','=',null)
                        ->count();

        $solved_permohonan = DB::table('td_permohonan_informasi')
                        ->where('is_process','=','yes')
                        ->where('is_solved','=','yes')
                        ->where('is_cancel','=',null)
                        ->count();

        $cancel_permohonan = DB::table('td_permohonan_informasi')
                        ->where('is_solved','=',null)
                        ->where('is_cancel','=','yes')
                        ->count();


        $data_status_permohonan = [
            'open' => $open_permohonan,
            'process' => $process_permohonan,
            'solved' => $solved_permohonan,
            'cancel' => $cancel_permohonan,
        ];

        $permohonan=DB::select("SELECT MONTH(created_at) AS bulan, COUNT(*) AS jumlah 
                            FROM     td_permohonan_informasi
                            WHERE     YEAR(created_at) = '2022' 
                            GROUP BY  MONTH(created_at)");



        $datapermohonan=array();

        for($i=1;$i<=12;$i++)
        {
            $temp=0;
            foreach($permohonan as $val)
            {
                if($val->bulan==$i)
                {
                    $temp=$val->jumlah;
                }
            }

            $datapermohonan[$i] = $temp;
        }




        $open_pengaduan = DB::table('td_pengaduan')
                        ->where('is_process','=','no')
                        ->where('is_solved','=',null)
                        ->where('is_cancel','=',null)
                        ->count();

        $process_pengaduan = DB::table('td_pengaduan')
                        ->where('is_process','=','yes')
                        ->where('is_solved','=',null)
                        ->where('is_cancel','=',null)
                        ->count();

        $solved_pengaduan = DB::table('td_pengaduan')
                        ->where('is_process','=','yes')
                        ->where('is_solved','=','yes')
                        ->where('is_cancel','=',null)
                        ->count();

        $cancel_pengaduan = DB::table('td_pengaduan')
                        ->where('is_solved','=',null)
                        ->where('is_cancel','=','yes')
                        ->count();

        $data_status_pengaduan = [
          'open' => $open_pengaduan,
          'process' => $process_pengaduan,
          'solved' => $solved_pengaduan,
          'cancel' => $cancel_pengaduan,
        ];


        $pengaduan=DB::select("SELECT MONTH(created_at) AS bulan, COUNT(*) AS jumlah 
                            FROM     td_pengaduan
                            WHERE     YEAR(created_at) = '2022' 
                            GROUP BY  MONTH(created_at)");


        $datapengaduan=array();

        for($i=1;$i<=12;$i++)
        {
            $temp=0;
            foreach($pengaduan as $val)
            {
                if($val->bulan==$i)
                {
                    $temp=$val->jumlah;
                }
            }

            $datapengaduan[$i] = $temp;
        }

        
        return view('home', compact('data_status_permohonan', 'data_status_pengaduan', 'datapermohonan', 'datapengaduan'));
    }
}
