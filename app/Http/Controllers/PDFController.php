<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function index(){
        $data = [
            'title' => 'Umubatizo',
            'date' => date('d/M/Y'),
            'content' => 'This is to certify that mukajoshua is baptised',
        ];

        $pdf = PDF::loadView('pdf',$data);

        return $pdf->download('fillelle.pdf');

    }
}
