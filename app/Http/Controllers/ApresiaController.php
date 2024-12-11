<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApresiaController extends Controller
{
    //
    public function index()
    {      

        //GET DATA GABUNGAN
        $rest_all           = Http::get('https://apresia.halmaheraselatankab.com/api/resi_gabungan/aWthcm9zLjAuOTgwNTE2ZmY5YmRiMjhmNmNlZTZmOWQ3MzM2ZjFlY2I');
        $statusCode_all     = $rest_all->getStatusCode();
        $body_data_all      = $rest_all->getBody()->getContents();
        $data_apresia       = json_decode($body_data_all, true);

        //GET DATA RESI FISIK
        $rest_fisik           = Http::get('https://apresia.halmaheraselatankab.com/api/resi_fisik/aWthcm9zLjAuOTgwNTE2ZmY5YmRiMjhmNmNlZTZmOWQ3MzM2ZjFlY2I');
        $statusCode_fisik     = $rest_fisik->getStatusCode();
        $body_data_fisik      = $rest_fisik->getBody()->getContents();
        $data_fisik           = json_decode($body_data_fisik, true);

        //GET DATA RESI KEUANGAN
        $rest_keuangan           = Http::get('https://apresia.halmaheraselatankab.com/api/resi_keuangan/aWthcm9zLjAuOTgwNTE2ZmY5YmRiMjhmNmNlZTZmOWQ3MzM2ZjFlY2I');
        $statusCode_keuangan     = $rest_keuangan->getStatusCode();
        $body_data_keuangan      = $rest_keuangan->getBody()->getContents();
        $data_keuangan           = json_decode($body_data_keuangan, true);

        // dd($data_keuangan);

        return view('apresia.index',compact(['data_apresia','data_fisik','data_keuangan']));
    }
}
