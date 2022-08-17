<?php

namespace App\Http\Controllers;

use App\bobotkecerdasan;
use App\bobotsikapkerja;
use App\bobottargetkerja;
use App\Karyawan;
use App\kecerdasan;
use App\sikapkerja;
use App\targetkerja;
use App\nialiakhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //
    public function tampil()
    {
        $tp = Karyawan::all();
        return view('index', ['tp' => $tp]);
    }

    public function karyawan()
    {
        $tp = Karyawan::all();
        return view('kecerdasan', ['tp' => $tp]);
    }

    public function tampilbobotkecerdasan()
    {
        $tp = bobotkecerdasan::all();
        return view('pembobotan', ['tp' => $tp]);
    }

    public function submitkecerdasan(Request $request)
    {
        $kecerdasan = new kecerdasan;
        $kecerdasan->id_karyawan = $request->cb_id_karyawan;
        $kecerdasan->knowledge = $request->radio1;
        $kecerdasan->area = $request->radio2;
        $kecerdasan->kreatif = $request->radio3;
        $kecerdasan->logika = $request->radio4;
        $kecerdasan->inovatif = $request->radio5;
        $kecerdasan->save();

        $bkecerdasan = new bobotkecerdasan();
        $bkecerdasan->id_karyawan = $request->cb_id_karyawan;
        //bobot knowladge
        if ($request->radio1 - 4 == 0) {
            $bkecerdasan->b_knowledge = 5;
        } elseif ($request->radio1 - 4 == 1) {
            $bkecerdasan->b_knowledge = 4.5;
        } elseif ($request->radio1 - 4 == -1) {
            $bkecerdasan->b_knowledge = 4;
        } elseif ($request->radio1 - 4 == 2) {
            $bkecerdasan->b_knowledge = 3.5;
        } elseif ($request->radio1 - 4 == -2) {
            $bkecerdasan->b_knowledge = 3;
        } elseif ($request->radio1 - 4 ==  3) {
            $bkecerdasan->b_knowledge = 2.5;
        } elseif ($request->radio1 - 4 ==  -3) {
            $bkecerdasan->b_knowledge = 2;
        } elseif ($request->radio1 - 4 ==  4) {
            $bkecerdasan->b_knowledge = 1.5;
        } elseif ($request->radio1 - 4 ==  -4) {
            $bkecerdasan->b_knowledge = 1;
        }

        //bobot area
        if ($request->radio2 - 4 == 0) {
            $bkecerdasan->b_area = 5;
        } elseif ($request->radio2 - 4 == 1) {
            $bkecerdasan->b_area = 4.5;
        } elseif ($request->radio2 - 4 == -1) {
            $bkecerdasan->b_area = 4;
        } elseif ($request->radio2 - 4 == 2) {
            $bkecerdasan->b_area = 3.5;
        } elseif ($request->radio2 - 4 == -2) {
            $bkecerdasan->b_area = 3;
        } elseif ($request->radio2 - 4 ==  3) {
            $bkecerdasan->area = 2.5;
        } elseif ($request->radio2 - 4 ==  -3) {
            $bkecerdasan->b_area = 2;
        } elseif ($request->radio2 - 4 ==  4) {
            $bkecerdasan->b_area = 1.5;
        } elseif ($request->radio2 - 4 ==  -4) {
            $bkecerdasan->b_area = 1;
        }
        //kreatif
        if ($request->radio3 - 3 == 0) {
            $bkecerdasan->b_kreatif = 5;
        } elseif ($request->radio3 - 3 == 1) {
            $bkecerdasan->b_kreatif = 4.5;
        } elseif ($request->radio3 - 3 == -1) {
            $bkecerdasan->b_kreatif = 4;
        } elseif ($request->radio3 - 3 == 2) {
            $bkecerdasan->b_kreatif = 3.5;
        } elseif ($request->radio3 - 3 == -2) {
            $bkecerdasan->b_kreatif = 3;
        } elseif ($request->radio3 - 3 ==  3) {
            $bkecerdasan->b_kreatif = 2.5;
        } elseif ($request->radio3 - 3 ==  -3) {
            $bkecerdasan->b_kreatif = 2;
        } elseif ($request->radio3 - 3 ==  4) {
            $bkecerdasan->b_kreatif = 1.5;
        } elseif ($request->radio3 - 3 == -4) {
            $bkecerdasan->b_kreatif = 1;
        }
        //logika
        if ($request->radio4 - 3 == 0) {
            $bkecerdasan->b_logika = 5;
        } elseif ($request->radio4 - 3 == 1) {
            $bkecerdasan->b_logika = 4.5;
        } elseif ($request->radio4 - 3 == -1) {
            $bkecerdasan->b_logika = 4;
        } elseif ($request->radio4 - 3 == 2) {
            $bkecerdasan->b_logika = 3.5;
        } elseif ($request->radio4 - 3 == -2) {
            $bkecerdasan->b_logika = 3;
        } elseif ($request->radio4 - 3 ==  3) {
            $bkecerdasan->b_logika = 2.5;
        } elseif ($request->radio4 - 3 ==  -3) {
            $bkecerdasan->b_logika = 2;
        } elseif ($request->radio4 - 3 ==  4) {
            $bkecerdasan->b_logika = 1.5;
        } elseif ($request->radio4 - 3 == -4) {
            $bkecerdasan->b_logika = 1;
        }
        //inovatif
        if ($request->radio5 - 3 == 0) {
            $bkecerdasan->b_inovatif = 5;
        } elseif ($request->radio5 - 3 == 1) {
            $bkecerdasan->b_inovatif = 4.5;
        } elseif ($request->radio5 - 3 == -1) {
            $bkecerdasan->b_inovatif = 4;
        } elseif ($request->radio5 - 3 == 2) {
            $bkecerdasan->b_inovatif = 3.5;
        } elseif ($request->radio5 - 3 == -2) {
            $bkecerdasan->b_inovatif = 3;
        } elseif ($request->radio5 - 3 ==  3) {
            $bkecerdasan->b_inovatif = 2.5;
        } elseif ($request->radio5 - 3 ==  -3) {
            $bkecerdasan->b_inovatif = 2;
        } elseif ($request->radio5 - 3 ==  4) {
            $bkecerdasan->b_inovatif = 1.5;
        } elseif ($request->radio5 - 3 == -4) {
            $bkecerdasan->b_inovatif = 1;
        }

        $bkecerdasan->save();
        $karyawan = Karyawan::where('id_karyawan', $request->cb_id_karyawan)->first();
        // dd($karyawan);
        return view('targetkerja', ['id_karyawan' => $request->cb_id_karyawan, 'nama_karyawan' => $karyawan->nama]);
    }

    public function submittargetkerja(Request $request)
    {
        $target = new targetkerja;
        $target->id_karyawan = $request->id_karyawan;
        $target->komitmen = $request->radio1;
        $target->fokus = $request->radio2;
        $target->terukur = $request->radio3;
        $target->save();
        $karyawan = Karyawan::where('id_karyawan', $request->id_karyawan)->first();


        $btargetkerja = new bobottargetkerja();
        $btargetkerja->id_karyawan = $request->id_karyawan;

        //bobot komitmen
        if ($request->radio1 - 3 == 0) {
            $btargetkerja->b_komitmen = 5;
        } elseif ($request->radio1 - 3 == 1) {
            $btargetkerja->b_komitmen = 4.5;
        } elseif ($request->radio1 - 3 == -1) {
            $btargetkerja->b_komitmen = 4;
        } elseif ($request->radio1 - 3 == 2) {
            $btargetkerja->b_komitmen = 3.5;
        } elseif ($request->radio1 - 3 == -2) {
            $btargetkerja->b_komitmen = 3;
        } elseif ($request->radio1 - 3 ==  3) {
            $btargetkerja->b_komitmen = 2.5;
        } elseif ($request->radio1 - 3 ==  -3) {
            $btargetkerja->b_komitmen = 2;
        } elseif ($request->radio1 - 3 ==  4) {
            $btargetkerja->b_komitmen = 1.5;
        } elseif ($request->radio1 - 3 ==  -4) {
            $btargetkerja->b_komitmen = 1;
        }

        //bobot fokus
        if ($request->radio2 - 3 == 0) {
            $btargetkerja->b_fokus = 5;
        } elseif ($request->radio2 - 3 == 1) {
            $btargetkerja->b_fokus = 4.5;
        } elseif ($request->radio2 - 3 == -1) {
            $btargetkerja->b_fokus = 4;
        } elseif ($request->radio2 - 3 == 2) {
            $btargetkerja->b_fokus = 3.5;
        } elseif ($request->radio2 - 3 == -2) {
            $btargetkerja->b_fokus = 3;
        } elseif ($request->radio2 - 3 ==  3) {
            $btargetkerja->area = 2.5;
        } elseif ($request->radio2 - 3 ==  -3) {
            $btargetkerja->b_fokus = 2;
        } elseif ($request->radio2 - 3 ==  4) {
            $btargetkerja->b_fokus = 1.5;
        } elseif ($request->radio2 - 3 ==  -4) {
            $btargetkerja->b_fokus = 1;
        }
        //bobot terukur
        if ($request->radio3 - 4 == 0) {
            $btargetkerja->b_terukur = 5;
        } elseif ($request->radio3 - 4 == 1) {
            $btargetkerja->b_terukur = 4.5;
        } elseif ($request->radio3 - 4 == -1) {
            $btargetkerja->b_terukur = 4;
        } elseif ($request->radio3 - 4 == 2) {
            $btargetkerja->b_terukur = 3.5;
        } elseif ($request->radio3 - 4 == -2) {
            $btargetkerja->b_terukur = 3;
        } elseif ($request->radio3 - 4 ==  3) {
            $btargetkerja->b_terukur = 2.5;
        } elseif ($request->radio3 - 4 ==  -3) {
            $btargetkerja->b_terukur = 2;
        } elseif ($request->radio3 - 4 ==  4) {
            $btargetkerja->b_terukur = 1.5;
        } elseif ($request->radio3 - 4 == -4) {
            $btargetkerja->b_terukur = 1;
        }
        $btargetkerja->save();
        $karyawan = Karyawan::where('id_karyawan', $request->id_karyawan)->first();
        return view('sikapkerja', ['id_karyawan' => $request->id_karyawan, 'nama_karyawan' => $karyawan->nama]);
    }
    
    public function submitsikapkerja(Request $request)
    {
        $sikap = new sikapkerja();
        $sikap->id_karyawan = $request->id_karyawan;
        $sikap->jujur = $request->radio1;
        $sikap->teliti = $request->radio2;
        $sikap->disiplin = $request->radio3;
        $sikap->komunikasi = $request->radio4;
        $sikap->kerjasama = $request->radio5;
        $sikap->percayadiri = $request->radio6;
        $sikap->save();
        

        $bsikapkerja = new bobotsikapkerja();
        $bsikapkerja->id_karyawan = $request->id_karyawan;
        //bobot jujur
        if ($request->radio1 - 4 == 0) {
            $bsikapkerja->b_jujur = 5;
        } elseif ($request->radio1 - 4 == 1) {
            $bsikapkerja->b_jujur = 4.5;
        } elseif ($request->radio1 - 4 == -1) {
            $bsikapkerja->b_jujur = 4;
        } elseif ($request->radio1 - 4 == 2) {
            $bsikapkerja->b_jujur = 3.5;
        } elseif ($request->radio1 - 4 == -2) {
            $bsikapkerja->b_jujur = 3;
        } elseif ($request->radio1 - 4 ==  3) {
            $bsikapkerja->b_jujur = 2.5;
        } elseif ($request->radio1 - 4 ==  -3) {
            $bsikapkerja->b_jujur = 2;
        } elseif ($request->radio1 - 4 ==  4) {
            $bsikapkerja->b_jujur = 1.5;
        } elseif ($request->radio1 - 4 ==  -4) {
            $bsikapkerja->b_jujur = 1;
        }

        //bobot teliti
        if ($request->radio2 - 4 == 0) {
            $bsikapkerja->b_teliti = 5;
        } elseif ($request->radio2 - 4 == 1) {
            $bsikapkerja->b_teliti = 4.5;
        } elseif ($request->radio2 - 4 == -1) {
            $bsikapkerja->b_teliti = 4;
        } elseif ($request->radio2 - 4 == 2) {
            $bsikapkerja->b_teliti = 3.5;
        } elseif ($request->radio2 - 4 == -2) {
            $bsikapkerja->b_teliti = 3;
        } elseif ($request->radio2 - 4 ==  3) {
            $bsikapkerja->area = 2.5;
        } elseif ($request->radio2 - 4 ==  -3) {
            $bsikapkerja->b_teliti = 2;
        } elseif ($request->radio2 - 4 ==  4) {
            $bsikapkerja->b_teliti = 1.5;
        } elseif ($request->radio2 - 4 ==  -4) {
            $bsikapkerja->b_teliti = 1;
        }
        //bobot disiplin
        if ($request->radio3 - 4 == 0) {
            $bsikapkerja->b_disiplin = 5;
        } elseif ($request->radio3 - 4 == 1) {
            $bsikapkerja->b_disiplin = 4.5;
        } elseif ($request->radio3 - 4 == -1) {
            $bsikapkerja->b_disiplin = 4;
        } elseif ($request->radio3 - 4 == 2) {
            $bsikapkerja->b_disiplin = 3.5;
        } elseif ($request->radio3 - 4 == -2) {
            $bsikapkerja->b_disiplin = 3;
        } elseif ($request->radio3 - 4 ==  3) {
            $bsikapkerja->b_disiplin = 2.5;
        } elseif ($request->radio3 - 4 ==  -3) {
            $bsikapkerja->b_disiplin = 2;
        } elseif ($request->radio3 - 4 ==  4) {
            $bsikapkerja->b_disiplin = 1.5;
        } elseif ($request->radio3 - 4 == -4) {
            $bsikapkerja->b_disiplin = 1;
        }
        //bobot komunikasi
        if ($request->radio4 - 3 == 0) {
            $bsikapkerja->b_komunikasi = 5;
        } elseif ($request->radio4 - 3 == 1) {
            $bsikapkerja->b_komunikasi = 4.5;
        } elseif ($request->radio4 - 3 == -1) {
            $bsikapkerja->b_komunikasi = 4;
        } elseif ($request->radio4 - 3 == 2) {
            $bsikapkerja->b_komunikasi = 3.5;
        } elseif ($request->radio4 - 3 == -2) {
            $bsikapkerja->b_komunikasi = 3;
        } elseif ($request->radio4 - 3 ==  3) {
            $bsikapkerja->b_komunikasi = 2.5;
        } elseif ($request->radio4 - 3 ==  -3) {
            $bsikapkerja->b_komunikasi = 2;
        } elseif ($request->radio4 - 3 ==  4) {
            $bsikapkerja->b_komunikasi = 1.5;
        } elseif ($request->radio4 - 3 == -4) {
            $bsikapkerja->b_komunikasi = 1;
        }
        //bobot kerjasama
        if ($request->radio5 - 3 == 0) {
            $bsikapkerja->b_kerjasama = 5;
        } elseif ($request->radio5 - 3 == 1) {
            $bsikapkerja->b_kerjasama = 4.5;
        } elseif ($request->radio5 - 3 == -1) {
            $bsikapkerja->b_kerjasama = 4;
        } elseif ($request->radio5 - 3 == 2) {
            $bsikapkerja->b_kerjasama = 3.5;
        } elseif ($request->radio5 - 3 == -2) {
            $bsikapkerja->b_kerjasama = 3;
        } elseif ($request->radio5 - 3 ==  3) {
            $bsikapkerja->b_kerjasama = 2.5;
        } elseif ($request->radio5 - 3 ==  -3) {
            $bsikapkerja->b_kerjasama = 2;
        } elseif ($request->radio5 - 3 ==  4) {
            $bsikapkerja->b_kerjasama = 1.5;
        } elseif ($request->radio5 - 3 == -4) {
            $bsikapkerja->b_kerjasama = 1;
        }
        //bobot percayadiri
        if ($request->radio5 - 3 == 0) {
            $bsikapkerja->b_percayadiri = 5;
        } elseif ($request->radio6 - 3 == 1) {
            $bsikapkerja->b_percayadiri = 4.5;
        } elseif ($request->radio6 - 3 == -1) {
            $bsikapkerja->b_percayadiri = 4;
        } elseif ($request->radio6 - 3 == 2) {
            $bsikapkerja->b_percayadiri = 3.5;
        } elseif ($request->radio6 - 3 == -2) {
            $bsikapkerja->b_percayadiri = 3;
        } elseif ($request->radio6 - 3 ==  3) {
            $bsikapkerja->b_percayadiri = 2.5;
        } elseif ($request->radio6 - 3 ==  -3) {
            $bsikapkerja->b_percayadiri = 2;
        } elseif ($request->radio6 - 3 ==  4) {
            $bsikapkerja->b_percayadiri = 1.5;
        } elseif ($request->radio6- 3 == -4) {
            $bsikapkerja->b_percayadiri = 1;
        }
        $bsikapkerja->save();
        $karyawan = Karyawan::where('id_karyawan', $request->id_karyawan)->first();
        //join
        $join_kecerdasan = DB::table('karyawan')
            ->join('bobot_kepintaran', 'karyawan.id_karyawan', '=', 'bobot_kepintaran.id_karyawan')
            ->select('karyawan.*', 'bobot_kepintaran.*')
            ->get();

        $join_targetkerja = DB::table('karyawan')
            ->join('bobot_targetkerja', 'karyawan.id_karyawan', '=', 'bobot_targetkerja.id_karyawan')
            ->select('karyawan.*', 'bobot_targetkerja.*')
            ->get();

        $join_sikapkerja = DB::table('karyawan')
            ->join('bobot_sikapkerja', 'karyawan.id_karyawan', '=', 'bobot_sikapkerja.id_karyawan')
            ->select('karyawan.*', 'bobot_sikapkerja.*')
            ->get();

            $join_corefactor = DB::table('karyawan')
            ->join('bobot_sikapkerja', 'karyawan.id_karyawan', '=', 'bobot_sikapkerja.id_karyawan')
            ->join('bobot_targetkerja', 'karyawan.id_karyawan', '=', 'bobot_targetkerja.id_karyawan')
            ->join('bobot_kepintaran', 'karyawan.id_karyawan', '=', 'bobot_kepintaran.id_karyawan')
            ->select('bobot_kepintaran.b_knowledge','bobot_kepintaran.b_area','bobot_kepintaran.b_logika',
                    'bobot_targetkerja.b_komitmen','bobot_targetkerja.b_terukur',
                    'bobot_sikapkerja.b_jujur','bobot_sikapkerja.b_teliti','bobot_sikapkerja.b_komunikasi','bobot_sikapkerja.b_percayadiri')
            ->get();


            $join_secondfactor = DB::table('karyawan')
            ->join('bobot_sikapkerja', 'karyawan.id_karyawan', '=', 'bobot_sikapkerja.id_karyawan')
            ->join('bobot_targetkerja', 'karyawan.id_karyawan', '=', 'bobot_targetkerja.id_karyawan')
            ->join('bobot_kepintaran', 'karyawan.id_karyawan', '=', 'bobot_kepintaran.id_karyawan')
            ->select('karyawan.*','bobot_kepintaran.b_kreatif','bobot_kepintaran.b_inovatif',
            'bobot_targetkerja.b_fokus',
            'bobot_sikapkerja.b_disiplin','bobot_sikapkerja.b_kerjasama')
            ->get();

        return view('pembobotan', [
            'id_karyawan' => $request->id_karyawan, 
            'nama_karyawan' => $karyawan->nama,
            'join_kecerdasan' => $join_kecerdasan,
            'join_targetkerja' => $join_targetkerja,
            'join_sikapkerja'=>$join_sikapkerja,
            'join_corefactor'=>$join_corefactor,
            'join_secondfactor'=>$join_secondfactor]);
    }
    public function hitunghasil(Request $request)
    {       
        $na = new nialiakhir;
        $na->id_karyawan = $request->id_karyawan;
        $na->nk = $request->cerdas;
        $na->nt = $request->target;
        $na->ns = $request->sikap;
        $na->nh = $request->akhir;
        $na->save();
        $join_nilai = DB::table('karyawan')
        ->join('nilai_akhir', 'karyawan.id_karyawan', '=', 'nilai_akhir.id_karyawan')
        ->select('karyawan.*', 'nilai_akhir.*')
        ->get();
        $karyawan = Karyawan::where('id_karyawan', $request->id_karyawan)->first();

        $na = new bobotkecerdasan();
        $na->id_karyawan = $request->id_karyawan;
        return view('pembobotan', ['join_nilai'=>$join_nilai,'na'=>$na]);
    }
}
