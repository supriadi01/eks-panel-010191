<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {      

        $response       = Http::get('https://apresia.halmaheraselatankab.com/api/resi_gabungan/aWthcm9zLjAuOTgwNTE2ZmY5YmRiMjhmNmNlZTZmOWQ3MzM2ZjFlY2I');
        $statusCode     = $response->getStatusCode();
        $body           = $response->getBody()->getContents();
        $data_apresia   = json_decode($body, true);

        // dd($data_apresia);

        return view('welcome',compact(['data_apresia']));
    }
}