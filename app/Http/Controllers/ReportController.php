<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function generateReport()
    {
        $html = view('report');

        $mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

        $mpdf->allow_charset_conversion = true;

        $mpdf->SetTitle('Consolidate Report-'. time());

        $mpdf->WriteHTML($html);
        
        $mpdf->Output();
    }
}
