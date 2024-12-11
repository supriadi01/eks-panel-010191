<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StuntingController extends Controller
{
    //
    public function index()
    {      

        //GET DATA GABUNGAN
        $stunting              = Http::get('https://people.halmaheraselatankab.com/api/report-stunting/$2y$10$4iSyJJlHbULMY9vR7KKBIOIqhQbpZqgeOk4FcXc3k/tQojvJxvYyO');
        $statusCode_stunting   = $stunting->getStatusCode();
        $body_data_stunting    = $stunting->getBody()->getContents();
        $report_stunting       = json_decode($body_data_stunting, true);

        // dd($report_stunting['find_sedang']);
        $find_sedang = $report_stunting['find_sedang'];
        

        return view('stunting.index',compact(['report_stunting','find_sedang']));
    }
}
