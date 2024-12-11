<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIpencakerController extends Controller
{
    //
    public function index()
    {      

        //GET DATA GABUNGAN
        $by_kec             = Http::get('https://sipinker.halmaheraselatankab.go.id/api/count-by-kecamatan/all');
        $statusCode_kec     = $by_kec->getStatusCode();
        $body_data_kec      = $by_kec->getBody()->getContents();
        $pencaker_kec       = json_decode($body_data_kec, true);

        $by_pendidikan           = Http::get('https://sipinker.halmaheraselatankab.go.id/api/count-by-pendidikan/all');
        $statusCode_pendidikan   = $by_pendidikan->getStatusCode();
        $body_data_pendidikan    = $by_pendidikan->getBody()->getContents();
        $pencaker_pendidikan     = json_decode($body_data_pendidikan, true);

        $by_gender               = Http::get('https://sipinker.halmaheraselatankab.go.id/api/count-by-gender/all');
        $statusCode_gender       = $by_gender->getStatusCode();
        $body_data_gender        = $by_gender->getBody()->getContents();
        $pencaker_gender         = json_decode($body_data_gender, true);

        // dd($pencaker_pendidikan);

        // if ($pencaker_kec) {
        //     // Akses elemen-elemen dalam data JSON yang sudah didekode
        //     $kec = $pencaker_kec['countsByKecamatan'];
        
        //     foreach ($fruits as $fruit) {
        //         dd($fruit['kecamatan'], $fruit['total']);
        //     }
        // } else {
        //     echo "Gagal mengurai data JSON.";
        // }

        return view('pencaker.index',compact(['pencaker_kec','pencaker_pendidikan','pencaker_gender']));
    }
}
