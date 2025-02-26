<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function form()
    {
        return view('form2');
    }

    public function showdata()
    {
        $datas = Member::all();
        $totalSamityMale = Member::sum('samity_male');
        $totalSamityFemale = Member::sum('samity_female');
        $totalSamityMemberCount = $totalSamityMale + $totalSamityFemale;
        $totalMemberMale = Member::sum('member_male');
        $totalMemberFemale = Member::sum('member_female');
        $totalMemberCount = $totalMemberMale + $totalMemberFemale;

        return view('show_data', compact('datas', 'totalSamityMale', 'totalSamityFemale', 'totalMemberMale', 'totalMemberFemale', 'totalSamityMemberCount', 'totalMemberCount'));
    }

    public function view()
    {
        // return view('view');
        return response()->json('ok', 200);
    }

    public function generatePDF()
    {
        $info = $this->showdata();
        
        $datas = $info->datas;
        $totalSamityMale = $info->totalSamityMale;
        $totalSamityFemale = $info->totalSamityFemale;
        $totalSamityMemberCount = $info->totalSamityMemberCount;
        $totalMemberMale = $info->totalMemberMale;
        $totalMemberFemale = $info->totalMemberFemale;
        $totalMemberCount = $info->totalMemberCount;

        $html = view('show_pdf', compact('datas', 'totalSamityMale', 'totalSamityFemale', 'totalMemberMale', 'totalMemberFemale', 'totalSamityMemberCount', 'totalMemberCount'));

        $mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

        $mpdf->setAutoTopMargin = 'stretch';

        $mpdf->setAutoBottomMargin = 'stretch';

        $mpdf->WriteHTML($html);

        $mpdf->Output('Samity and Members Information-'. time() . '.pdf', 'I');
    }

    public function generateReport()
    {
        $html = view('report');

        $mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

        $mpdf->allow_charset_conversion = true;

        $mpdf->SetTitle('Consolidate Report-'. time());

        $mpdf->setAutoTopMargin = 'stretch';

        $mpdf->setAutoBottomMargin = 'stretch';

        //$mpdf->SetFooter('{PAGENO} of {nb}', 'O');  // 'O' removes the default line

        // Set custom footer without horizontal line using inline CSS
        /*$footerHtml = '
            <table width="100%" style="border-collapse: collapse; border: none;">
                <tr style="border: none;">
                    <td style="text-align:left; padding-top: 10px; border: none;">Printed Date: ' . date('d-m-Y') . '</td>
                    <td style="text-align:right; padding-top: 10px; border: none;">Page {PAGENO} of {nb}</td>
                </tr>
            </table>';
        
        $mpdf->SetHTMLFooter($footerHtml);*/

        $mpdf->WriteHTML($html);

        // $mpdf->Output();
        // $mpdf->Output('Proyas Consolidate Report-'. time() . '.pdf', 'D');

        $mpdf->Output('Proyas Consolidate Report-'. time() . '.pdf', 'I');
        
    }
}
