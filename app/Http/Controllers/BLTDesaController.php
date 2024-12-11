<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BLTDesaController extends Controller
{
    //
    public function index()
    {      

        //GET DATA GABUNGAN
        $blt              = Http::get('https://people.halmaheraselatankab.com/api/report-blt/$2y$10$4iSyJJlHbULMY9vR7KKBIOIqhQbpZqgeOk4FcXc3k/tQojvJxvYyO');
        $statusCode_blt   = $blt->getStatusCode();
        $body_data_blt    = $blt->getBody()->getContents();
        $report_blt       = json_decode($body_data_blt, true);

        // dd($report_blt);
        return view('blt.index',compact(['report_blt']));
    }
}
