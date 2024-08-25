<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
Use Redirect;
use Auth;

class IndexController extends Controller
{

    public function index()
    {
        $title="Homepage";
    
        return view('homepage', compact('title'));
    }

    public function profilbspjimedan()
    {
        return view('pages.profil.profil-bspjimedan');
    }

    public function profilppid()
    {
        return view('pages.profil.profil-ppid');
    }

    public function tugastanggungjawabppid()
    {
        return view('pages.profil.tugas-tanggung-jawab-ppid');
    }

    public function strukturppid()
    {
        return view('pages.profil.struktur-ppid');
    }

    public function visimisippid()
    {
        return view('pages.profil.visi-misi-ppid');
    }

    public function unitpelayananpublik()
    {
        return view('pages.layanan-informasi.unit-pelayanan-publik');
    }

    public function tatacarapermohonaninformasi()
    {
        return view('pages.standar-layanan.tata-cara-permohonan-informasi');
    }

    public function tatacarapengajuankeberatan()
    {
        return view('pages.standar-layanan.tata-cara-pengajuan-keberatan');
    }

    public function tatacarapenyelesaiansengketainformasi()
    {
        return view('pages.standar-layanan.tata-cara-penyelesaian-sengketa-informasi');
    }

    public function maklumatpelayananinformasipublik()
    {
        return view('pages.standar-layanan.maklumat-pelayanan-informasi-publik');
    }

    public function jalurwaktulayanan()
    {
        return view('pages.standar-layanan.jalur-waktu-layanan');
    }

    public function biayalayanan()
    {
        return view('pages.standar-layanan.biaya-layanan');
    }

    public function permohonaninformasi()
    {
        return view('pages.layanan-informasi.form_permohonan-informasi');
    }

    public function prosespermohonaninformasi(Request $request)
    {
        DB::beginTransaction();

        try 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $captcha = $request->input('captcha');

            $res = (int)$a + (int)$b;

            if($res != $captcha)
            {
                return Redirect::to('layanan-informasi/permohonan-informasi')->with('failed','Captcha tidak sesuai');
            }

            $totalNumber    = DB::table('td_permohonan_informasi')
                                ->get()
                                ->count();

            if($totalNumber > 0)
            {
                $lastNumber     = DB::table('td_permohonan_informasi')
                                ->orderBy('id', 'desc')
                                ->first();
                $lastNumber     = $lastNumber->no_daftar_temp + 1;
            }
            else 
            {
                $lastNumber     = $totalNumber + 1;
            }

            $no_pendaftaran = number($lastNumber)."/BSKJI/BSPJI-Medan/PPID/".getRomawi(date('m'))."/".date('Y');

            $namafile="";

            if($request->hasFile('upload_dokumen'))
            {
                $upload_dokumen = $request->file('upload_dokumen');
                $extension = $upload_dokumen->getClientOriginalExtension();
                $namafile = "ID_".$lastNumber.".".$extension;
                $tujuan_upload = public_path(). '/file/permohonan-informasi/identitas/';
                $upload_dokumen->move($tujuan_upload, $namafile);
            }      

            $data = array(
              'no_daftar_temp' => $lastNumber,
              'no_pendaftaran' => $no_pendaftaran,
              'nama_pemohon' => $request->input('nama_pemohon'),
              'no_identitas' => $request->input('no_identitas'),
              'alamat' => $request->input('alamat'),
              'pekerjaan' => $request->input('pekerjaan'),
              'no_hp' => $request->input('no_hp'),
              'email' => $request->input('email'),
              'rincian' => $request->input('rincian'),
              'tujuan' => $request->input('tujuan'),
              'cara_memperoleh' => $request->input('cara_memperoleh'),
              'cara_mendapatkan' => $request->input('cara_mendapatkan'),
              'is_process' => 'no',
              'upload_dokumen' => $namafile,
            );

            $insertID = DB::table('td_permohonan_informasi')->insertGetId($data);

            DB::commit();
        } 
        catch (\Exception $e) 
        {
            DB::rollback();
            return Redirect::to('layanan-informasi/permohonan-informasi')->with('failed','Gagal menyimpan data');
        }

        return Redirect::to('layanan-informasi/permohonan-informasi')->with('message','Berhasil membuat permohonan dengan No. Pendaftaran: '.$no_pendaftaran);
    }

    public function permohonankeberataninformasi()
    {
        return view('pages.layanan-informasi.form_permohonan-keberatan-informasi');
    }

    public function prosespermohonankeberataninformasi(Request $request)
    {
        DB::beginTransaction();

        try 
        {
            $a = $request->input('a');
            $b = $request->input('b');
            $captcha = $request->input('captcha');

            $res = (int)$a + (int)$b;

            if($res != $captcha)
            {
                return Redirect::to('layanan-informasi/permohonan-keberatan-informasi')->with('failed','Captcha tidak sesuai');
            }

            $data = array(
              'no_pendaftaran' => $request->input('no_pendaftaran'),
              'tujuan' => $request->input('tujuan'),
              'nama_pemohon' => $request->input('nama_pemohon'),
              'no_identitas' => $request->input('no_identitas'),
              'alamat' => $request->input('alamat'),
              'pekerjaan' => $request->input('pekerjaan'),
              'no_hp' => $request->input('no_hp'),
              'email' => $request->input('email'),
              'alasan' => $request->input('alasan'),
              'keterangan' => $request->input('keterangan'),
              'is_process' => 'no',
            );

            $insertID = DB::table('td_permohonan_keberatan_informasi')->insertGetId($data);

            $namafile="";

            if($request->hasFile('upload_dokumen'))
            {
                $upload_dokumen = $request->file('upload_dokumen');
                $extension = $upload_dokumen->getClientOriginalExtension();
                $namafile = "ID_".$insertID.time().".".$extension;
                $tujuan_upload = public_path(). '/file/permohonan-keberatan-informasi/identitas/';
                $upload_dokumen->move($tujuan_upload, $namafile);
            } 

             $data_upload = array(
              'upload_dokumen' => $namafile,
            );

            DB::table('td_permohonan_keberatan_informasi')->where('id', '=', $insertID)->update($data_upload);

            DB::commit();
        } 
        catch (\Exception $e) 
        {
            DB::rollback();
            return Redirect::to('layanan-informasi/permohonan-keberatan-informasi')->with('failed','Gagal menyimpan data');
        }

        return Redirect::to('layanan-informasi/permohonan-keberatan-informasi')->with('message','Berhasil membuat permohonan keberatan informasi');
    }


    public function laporanlayananinformasi()
    {
        return view('pages.layanan-informasi.laporan-layanan-informasi');
    }

    public function informasiberkala()
    {
        $ibjudul=DB::table('td_berkala_judul')
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return view('pages.informasi-publik.informasi-berkala', compact('ibjudul'));
    }

    public function informasisetiapsaat()
    {
        $issjudul=DB::table('td_setiapsaat_judul')
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return view('pages.informasi-publik.informasi-setiap-saat', compact('issjudul'));
    }

    public function informasisertamerta()
    {
        $ismjudul=DB::table('td_sertamerta_judul')
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return view('pages.informasi-publik.informasi-serta-merta', compact('ismjudul'));
    }

    public function informasidikecualikan()
    {
        $idjudul=DB::table('td_dikecualikan_judul')
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return view('pages.informasi-publik.informasi-dikecualikan', compact('idjudul'));
    }

    public function pengaduan()
    {
        $title="Pengaduan Masyarakat";
    
        return view('pages.pengaduan.form_pengaduan', compact('title'));
    }

    public function prosespengaduan(Request $request)
    {
        $lainnya = "";

        if($request->input('jenis_pelayanan')=="Lainnya")
        {
            $lainnya = $request->input('lainnya_text');
        }

        $data = array(
          'nama' => $request->input('nama'),
          'alamat' => $request->input('alamat'),
          'pekerjaan' => $request->input('pekerjaan'),
          'no_hp' => $request->input('no_hp'),
          'email' => $request->input('email'),
          'jenis_pelayanan' => $request->input('jenis_pelayanan'),
          'lainnya' => $lainnya,
          'uraian_pengaduan' => $request->input('uraian_pengaduan'),
          'is_process' => 'no',
        );

        $insertID = DB::table('td_pengaduan')->insertGetId($data);

        return Redirect::to('pengaduan')->with('message','Berhasil menyimpan data');
    }

    public function kontakkami()
    {
        $title="Kontak Kami";
    
        return view('kontak-kami', compact('title'));
    }

    public function tariflayanan()
    {
        $title="Simulasi Tarif Layanan Jasa Teknis";
        $komoditi = DB::table('md_komoditi')->get();

        return view('pages.informasi-layanan.tarif-layanan', compact('title', 'komoditi'));
    }

    public function alurlayananpengujian()
    {
        $title = "Alur Pelayanan Jasa Pengujian";

        return view('pages.informasi-layanan.alur-layanan-pengujian', compact('title'));
    }

    public function alurlayanankalibrasi()
    {
        $title = "Alur Pelayanan Jasa Kalibrasi";

        return view('pages.informasi-layanan.alur-layanan-kalibrasi', compact('title'));
    }


    public function alurlayanansertifikasi()
    {
        $title = "Alur Pelayanan Jasa Sertifikasi Produk";

        return view('pages.informasi-layanan.alur-layanan-sertifikasi', compact('title'));
    }

    public function standarpelayanan()
    {
        $title = "Standar Pelayanan";

        return view('pages.informasi-layanan.standar-pelayanan', compact('title'));
    }


    public function jsondataparameter($id_komoditi)
    {
        $parameter=DB::table('md_parameter')
            ->where('md_parameter.id_komoditi','=',$id_komoditi)  
            ->pluck('nama_parameter','id');

        //dd($parameter);

        return json_encode($parameter);
    }

    public function jsongethargaparameter($id_parameter)
    {
        $parameter=DB::table('md_parameter')
            ->where('md_parameter.id','=',$id_parameter)  
            ->first();

        //dd($parameter);

        return json_encode($parameter);
    }
}