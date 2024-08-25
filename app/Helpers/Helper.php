<?php
   
	function customTanggal($date, $date_format)
	{
	    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
	}

    function formatTanggalIndonesia($tanggal)
    {
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split = explode(' ', $tanggal);
        $split = explode('-', $split[0]);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }

    function formatTanggalIndonesiaV2($date)
    {
        setlocale(LC_ALL, 'IND');
        $tanggal = \Carbon\Carbon::parse($date)->formatLocalized('%d-%m-%Y');

        return $tanggal;
    }

    function formatRupiah($angka)
    { 
    	$hasil = "Rp ".number_format($angka,0, ',' , '.'); 

    	return $hasil; 
	}

    function getNamaHariIni()
    {

        $hari = date ("D");

        switch($hari){
            case 'Sun':
                $hari_ini = "Minggu";
            break;

            case 'Mon':         
                $hari_ini = "Senin";
            break;

            case 'Tue':
                $hari_ini = "Selasa";
            break;

            case 'Wed':
                $hari_ini = "Rabu";
            break;

            case 'Thu':
                $hari_ini = "Kamis";
            break;

            case 'Fri':
                $hari_ini = "Jumat";
            break;

            case 'Sat':
                $hari_ini = "Sabtu";
            break;
            
            default:
                $hari_ini = "Tidak di ketahui";     
            break;
        }

        return $hari_ini;
    }

    function getRomawi($bulan)
    {
        if($bulan < 10){
            $bulan = "0".$bulan;
        }
        switch ($bulan){
            case 1: 
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }

    function getNamaUNOR()
    {
        return "Balai Sandardisasi dan Pelayanan Jasa Industri Medan";
    }

    function number($angka)
    {
        return sprintf("%04s", $angka);
    }

    function getOpenPermohonanInformasi()
    {
       $open_permohonan = DB::table('td_permohonan_informasi')
                    ->where('is_solved','=',null)
                    ->where('is_cancel','=',null)
                    ->count();


        return $open_permohonan;
    }

    function getOpenPermohonanKeberatanInformasi()
    {
       $open_permohonan_keberatan = DB::table('td_permohonan_keberatan_informasi')
                    ->where('is_solved','=',null)
                    ->where('is_cancel','=',null)
                    ->count();


        return $open_permohonan_keberatan;
    }

    function getOpenPengaduan()
    {

        $open_pengaduan = DB::table('td_pengaduan')
                        ->where('is_process','=','no')
                        ->where('is_solved','=',null)
                        ->where('is_cancel','=',null)
                        ->count();

        return $open_pengaduan;
    }

    function captcha()
    {
        $res = rand(1,9);

        return $res;
    }

    function getBerkalaItem($id_judul)
    {
        $ibitem=DB::table('td_berkala_item')
                  ->where('id_judul', '=', $id_judul)
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return $ibitem;
    }

    function getSetiapSaatItem($id_judul)
    {
        $issitem=DB::table('td_setiapsaat_item')
                  ->where('id_judul', '=', $id_judul)
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return $issitem;
    }

    function getSertaMertaItem($id_judul)
    {
        $ismitem=DB::table('td_sertamerta_item')
                  ->where('id_judul', '=', $id_judul)
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return $ismitem;
    }

    function getDikecualikanItem($id_judul)
    {
        $iditem=DB::table('td_dikecualikan_item')
                  ->where('id_judul', '=', $id_judul)
                  ->orderBy('no_urut', 'asc')
                  ->get();

        return $iditem;
    }

?>
