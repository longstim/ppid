<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
Use Redirect;
use Auth;

class InformasiPublikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function daftarpermohonaninformasipublik()
    {
        $title="Permohonan Informasi Publik";

        $pib=DB::table('td_permohonan_informasi')
                  ->orderBy('id', 'desc')
                  ->get();

        return view('pages.informasi-publik.daftar_permohonan-informasi-publik', compact('title', 'pib'));
    }

    public function daftarpermohonaninformasipublikbystatus($status)
    {
        $title="Permohonan Informasi Publik (".$status.")";

        if($status=="Open")
        {
            $pib=DB::table('td_permohonan_informasi')
                ->where('is_process','=','no')
                ->where('is_solved','=',null)
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Process")
        {
            $pib= DB::table('td_permohonan_informasi')
                ->where('is_process','=','yes')
                ->where('is_solved','=',null)
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Solved")
        {   
            $pib= DB::table('td_permohonan_informasi')
                ->where('is_process','=','yes')
                ->where('is_solved','=','yes')
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Cancel")
        {
            $pib= DB::table('td_permohonan_informasi')
                ->where('is_solved','=',null)
                ->where('is_cancel','=','yes')
                ->orderBy('id', 'desc')
                ->get();
        }
        else
        {
            $pib= DB::table('td_permohonan_informasi')
                ->orderBy('id', 'desc')
                ->get();
        }


        return view('pages.informasi-publik.daftar_permohonan-informasi-publik', compact('title', 'pib'));
    }

    public function detailpermohonan($id)
    {
        $title="Detail Permohonan Informasi Publik";

        $detail=DB::table('td_permohonan_informasi')
                  ->where('id', '=', $id)
                  ->first();

        return view('pages.informasi-publik.detail_permohonan-informasi-publik', compact('title', 'detail'));
    }

    public function updatepermohonaninprogress(Request $request, $id)
    {
        $data = array(
          'is_process' => 'yes',
          'process_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_permohonan_informasi')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-permohonan-informasi-publik')->with('message','Berhasil menyimpan data');
    }

    public function updatepermohonansolved(Request $request)
    {
        $id = $request->input('id');

        $namafile="";

        if($request->hasFile('bukti_tindaklanjut'))
        {
            $upload_dokumen = $request->file('bukti_tindaklanjut');
            $extension = $upload_dokumen->getClientOriginalExtension();
            $namafile = "TindakLanjut_".$id.time().".".$extension;
            $tujuan_upload = public_path(). '/file/permohonan-informasi/tindak-lanjut/';
            $upload_dokumen->move($tujuan_upload, $namafile);
        }      

        $data = array(
          'keterangan_tindaklanjut' => $request->input('keterangan_tindaklanjut'),
          'bukti_tindaklanjut' => $namafile,
          'is_solved' => 'yes',
          'solved_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_permohonan_informasi')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-permohonan-informasi-publik')->with('message','Berhasil menyimpan data');
    }

    public function updatepermohonancancel(Request $request)
    {
        $id = $request->input('id');
        
        $data = array(
          'keterangan_tindaklanjut' => $request->input('keterangan_tindaklanjut'),
          'is_cancel' => 'yes',
          'cancel_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_permohonan_informasi')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-permohonan-informasi-publik')->with('message','Berhasil menyimpan data');
    }

    public function daftarpermohonankeberataninformasipublik()
    {
        $title="Permohonan Keberatan Informasi Publik";

        $pib=DB::table('td_permohonan_keberatan_informasi')
                  ->orderBy('id', 'desc')
                  ->get();

        return view('pages.informasi-publik.daftar_permohonan-keberatan-informasi-publik', compact('title', 'pib'));
    }

    public function daftarpermohonankeberataninformasipublikbystatus($status)
    {
        $title="Permohonan Informasi Publik (".$status.")";

        if($status=="Open")
        {
            $pib=DB::table('td_permohonan_informasi')
                ->where('is_process','=','no')
                ->where('is_solved','=',null)
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Process")
        {
            $pib= DB::table('td_permohonan_informasi')
                ->where('is_process','=','yes')
                ->where('is_solved','=',null)
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Solved")
        {   
            $pib= DB::table('td_permohonan_informasi')
                ->where('is_process','=','yes')
                ->where('is_solved','=','yes')
                ->where('is_cancel','=',null)
                ->orderBy('id', 'desc')
                ->get();
        }
        else if($status=="Cancel")
        {
            $pib= DB::table('td_permohonan_informasi')
                ->where('is_solved','=',null)
                ->where('is_cancel','=','yes')
                ->orderBy('id', 'desc')
                ->get();
        }
        else
        {
            $pib= DB::table('td_permohonan_informasi')
                ->orderBy('id', 'desc')
                ->get();
        }


        return view('pages.informasi-publik.daftar_permohonan-informasi-publik', compact('title', 'pib'));
    }

    public function detailpermohonankeberatan($id)
    {
        $title="Detail Permohonan Keberatan Informasi Publik";

        $detail=DB::table('td_permohonan_keberatan_informasi')
                  ->where('id', '=', $id)
                  ->first();

        return view('pages.informasi-publik.detail_permohonan-keberatan-informasi-publik', compact('title', 'detail'));
    }

    public function updatepermohonankeberataninprogress(Request $request, $id)
    {
        $data = array(
          'is_process' => 'yes',
          'process_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_permohonan_keberatan_informasi')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-permohonan-keberatan-informasi-publik')->with('message','Berhasil menyimpan data');
    }

    public function updatepermohonankeberatansolved(Request $request)
    {
        $id = $request->input('id');

        $namafile="";

        if($request->hasFile('bukti_tindaklanjut'))
        {
            $upload_dokumen = $request->file('bukti_tindaklanjut');
            $extension = $upload_dokumen->getClientOriginalExtension();
            $namafile = "TindakLanjut_".$id.time().".".$extension;
            $tujuan_upload = public_path(). '/file/permohonan-keberatan-informasi/tindak-lanjut/';
            $upload_dokumen->move($tujuan_upload, $namafile);
        }      

        $data = array(
          'keterangan_tindaklanjut' => $request->input('keterangan_tindaklanjut'),
          'bukti_tindaklanjut' => $namafile,
          'is_solved' => 'yes',
          'solved_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_permohonan_keberatan_informasi')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-permohonan-keberatan-informasi-publik')->with('message','Berhasil menyimpan data');
    }

    public function updatepermohonankeberatancancel(Request $request)
    {
        $id = $request->input('id');
        
        $data = array(
          'keterangan_tindaklanjut' => $request->input('keterangan_tindaklanjut'),
          'is_cancel' => 'yes',
          'cancel_at' => Carbon::now()->toDateTimeString(),
        );

        DB::table('td_permohonan_keberatan_informasi')->where('id','=',$id)->update($data);

        return Redirect::to('daftar-permohonan-keberatan-informasi-publik')->with('message','Berhasil menyimpan data');
    }

}
