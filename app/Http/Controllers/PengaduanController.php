<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
Use Redirect;
use Auth;

class PengaduanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function daftarpengaduan()
    {
        $title="Pengaduan Masyarakat";

        $pengaduan=DB::table('td_pengaduan')
                    ->orderBy('id', 'desc')
                    ->get();

        return view('pages.pengaduan.daftar_pengaduan', compact('title', 'pengaduan'));
    }


    public function daftarpengaduanbystatus($status)
    {
        $title="Pengaduan Masyarakat (".$status.")";

        if($status=="Open")
        {
            $pengaduan=DB::table('td_pengaduan')
                ->where('is_process','=','no')
                ->where('is_solved','=',null)
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Process")
        {
            $pengaduan= DB::table('td_pengaduan')
                ->where('is_process','=','yes')
                ->where('is_solved','=',null)
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Solved")
        {   
            $pengaduan= DB::table('td_pengaduan')
                ->where('is_process','=','yes')
                ->where('is_solved','=','yes')
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Cancel")
        {
            $pengaduan= DB::table('td_pengaduan')
                ->where('is_solved','=',null)
                ->where('is_cancel','=','yes')
                ->orderBy('id', 'desc')
                ->get();
        }
        else
        {
            $pengaduan= DB::table('td_pengaduan')
                ->orderBy('id', 'desc')
                ->get();
        }


        return view('pages.pengaduan.daftar_pengaduan', compact('title', 'pengaduan'));
    }

     public function detailpengaduan($id)
    {
        $title="Detail Pengaduan Masyarakat";

        $detail=DB::table('td_pengaduan')
                  ->where('id', '=', $id)
                  ->first();

        return view('pages.pengaduan.detail_pengaduan', compact('title', 'detail'));
    }

    public function updatepengaduaninprogress(Request $request, $id)
    {
        $data = array(
          'is_process' => 'yes',
          'process_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_pengaduan')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-pengaduan')->with('message','Berhasil menyimpan data');
    }

    public function updatepengaduansolved(Request $request)
    {   
        $id = $request->input('id');

        $namafile="";

        if($request->hasFile('bukti_tindaklanjut'))
        {
            $upload_dokumen = $request->file('bukti_tindaklanjut');
            $extension = $upload_dokumen->getClientOriginalExtension();
            $namafile = "TindakLanjut_".$id.time().".".$extension;
            $tujuan_upload = public_path(). '/file/pengaduan/tindak-lanjut/';
            $upload_dokumen->move($tujuan_upload, $namafile);
        }      

        $data = array(
          'keterangan_tindaklanjut' => $request->input('keterangan_tindaklanjut'),
          'bukti_tindaklanjut' => $namafile,
          'is_solved' => 'yes',
          'solved_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_pengaduan')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-pengaduan')->with('message','Berhasil menyimpan data');
    }

    public function updatepengaduancancel(Request $request)
    {
        $id = $request->input('id');

        $data = array(
          'keterangan_tindaklanjut' => $request->input('keterangan_tindaklanjut'),
          'is_cancel' => 'yes',
          'cancel_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_pengaduan')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-pengaduan')->with('message','Berhasil menyimpan data');
    }
}
