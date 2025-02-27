<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

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

    public function printDocument() 
    {
        $html = view('report');

        $mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

        $mpdf->setAutoTopMargin = 'stretch';

        $mpdf->setAutoBottomMargin = 'stretch';

        $mpdf->WriteHTML($html);

        // Save the PDF temporarily
        $filePath = storage_path('app/public/report.pdf');
        $mpdf->Output($filePath, 'F'); // 'F' saves the file locally

        return response()->json(['file' => asset('storage/report.pdf')]);
    }

    public function exportExcel()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getColumnDimension('A')->setWidth(30);

        $sheet->mergeCells('A1:G1');
        $sheet->getStyle('A1:G1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:G1')->getFont()->setBold(true);
        $sheet->setCellValue('A1', ' Proyas Manobik Unnayan Society');

        $sheet->mergeCells('A2:G2');
        $sheet->getStyle('A2:G2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->setCellValue('A2', 'Office Code : 0001, Name : Unit-01 Gobratala');

        $sheet->mergeCells('A3:G3');
        $sheet->getStyle('A3:G3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A3:G3')->getFont()->setBold(true);
        $sheet->setCellValue('A3', 'Savings Statements');

        // $sheet->mergeCells('A3:G3');
        $sheet->getStyle('A4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A4')->getFont()->setBold(true);
        $sheet->setCellValue('A4', 'January-2025');

        $sheet->getStyle('G4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_RIGHT);
        $sheet->getStyle('G4')->getFont()->setBold(true);
        $sheet->setCellValue('G4', 'POMIS - 1');

        $sheet->mergeCells('A6:B6');
        $sheet->getStyle('A3:G3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A6')->getFont()->setBold(true);
        $sheet->setCellValue('A6', '1. Samity and Members Information');

        $sheet->mergeCells('A7:A8');
        $sheet->getStyle('A7:A8')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A7:A8')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        $sheet->setCellValue('A7', 'Program');
        $sheet->getStyle('A7')->getFont()->setBold(true);

        $sheet->setCellValue('A9', 'Jagoron');
        $sheet->setCellValue('A10', 'Agrosor');
        $sheet->setCellValue('A11', 'Buniad');
        $sheet->setCellValue('A12', 'ENRICH IGA');
        $sheet->setCellValue('A13', 'LEPIG');
        $sheet->setCellValue('A14', 'Proyas SME');
        $sheet->setCellValue('A15', 'Agrosor- SMART Loan');
        $sheet->setCellValue('A16', 'Agrosor-MFCE Loan');
        $sheet->setCellValue('A17', 'Agrosor-Raise Loan');
        $sheet->setCellValue('A18', 'Agrosor-SEP Loan');
        $sheet->setCellValue('A19', 'Common Service Loan-SEP');
        $sheet->setCellValue('A20', 'ECCCP-Drought Loan');
        $sheet->setCellValue('A21', 'KGF Loan');
        $sheet->setCellValue('A22', 'Lift Loan');
        $sheet->setCellValue('A23', 'Lift Loan');
        $sheet->setCellValue('A24', 'Sufolon Loan');
        $sheet->setCellValue('A25', 'Total');

        $sheet->mergeCells('B7:D7');
        $sheet->getStyle('B7:D7')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->setCellValue('B7', 'Samities');
        $sheet->setCellValue('B8', 'Male');
        $sheet->setCellValue('C8', 'Female');
        $sheet->setCellValue('D8', 'Total');
        $sheet->getStyle('B7')->getFont()->setBold(true);
        $sheet->getStyle('B8:D8')->getFont()->setBold(true);

        $sheet->setCellValue('B9', '0');
        $sheet->setCellValue('B10', '0');
        $sheet->setCellValue('B11', '0');
        $sheet->setCellValue('B12', '0');
        $sheet->setCellValue('B13', '0');
        $sheet->setCellValue('B14', '0');
        $sheet->setCellValue('B15', '0');
        $sheet->setCellValue('B16', '0');
        $sheet->setCellValue('B17', '1');
        $sheet->setCellValue('B18', '1');
        $sheet->setCellValue('B19', '0');
        $sheet->setCellValue('B20', '0');
        $sheet->setCellValue('B21', '1');
        $sheet->setCellValue('B22', '0');
        $sheet->setCellValue('B23', '0');
        $sheet->setCellValue('B24', '0');
        $sheet->setCellValue('B25', '0');

        $sheet->setCellValue('C9', '94');
        $sheet->setCellValue('C10', '83');
        $sheet->setCellValue('C11', '90');
        $sheet->setCellValue('C12', '0');
        $sheet->setCellValue('C13', '0');
        $sheet->setCellValue('C14', '0');
        $sheet->setCellValue('C15', '4');
        $sheet->setCellValue('C16', '5');
        $sheet->setCellValue('C17', '1');
        $sheet->setCellValue('C18', '13');
        $sheet->setCellValue('C19', '1');
        $sheet->setCellValue('C20', '4');
        $sheet->setCellValue('C21', '60');
        $sheet->setCellValue('C22', '45');
        $sheet->setCellValue('C23', '24');
        $sheet->setCellValue('C24', '26');
        $sheet->setCellValue('C25', '94');

        $sheet->setCellValue('D9', '94');
        $sheet->setCellValue('D10', '83');
        $sheet->setCellValue('D11', '90');
        $sheet->setCellValue('D12', '0');
        $sheet->setCellValue('D13', '0');
        $sheet->setCellValue('D14', '0');
        $sheet->setCellValue('D15', '4');
        $sheet->setCellValue('D16', '5');
        $sheet->setCellValue('D17', '2');
        $sheet->setCellValue('D18', '14');
        $sheet->setCellValue('D19', '1');
        $sheet->setCellValue('D20', '4');
        $sheet->setCellValue('D21', '61');
        $sheet->setCellValue('D22', '45');
        $sheet->setCellValue('D23', '24');
        $sheet->setCellValue('D24', '26');
        $sheet->setCellValue('D25', '94');

        $sheet->mergeCells('E7:G7');
        $sheet->getStyle('E7:G7')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->setCellValue('E7', ' Members');
        $sheet->setCellValue('E8', 'Male');
        $sheet->setCellValue('F8', 'Female');
        $sheet->setCellValue('G8', 'Total');
        $sheet->getStyle('E7')->getFont()->setBold(true);
        $sheet->getStyle('E8:G8')->getFont()->setBold(true);

        $sheet->setCellValue('E9', '12');
        $sheet->setCellValue('E10', '11');
        $sheet->setCellValue('E11', '8');
        $sheet->setCellValue('E12', '0');
        $sheet->setCellValue('E13', '0');
        $sheet->setCellValue('E14', '0');
        $sheet->setCellValue('E15', '0');
        $sheet->setCellValue('E16', '0');
        $sheet->setCellValue('E17', '2');
        $sheet->setCellValue('E18', '1');
        $sheet->setCellValue('E19', '0');
        $sheet->setCellValue('E20', '0');
        $sheet->setCellValue('E21', '1');
        $sheet->setCellValue('E22', '0');
        $sheet->setCellValue('E23', '0');
        $sheet->setCellValue('E24', '0');
        $sheet->setCellValue('E25', '31');

        $sheet->setCellValue('F9', '1084');
        $sheet->setCellValue('F10', '321');
        $sheet->setCellValue('F11', '545');
        $sheet->setCellValue('F12', '0');
        $sheet->setCellValue('F13', '0');
        $sheet->setCellValue('F14', '0');
        $sheet->setCellValue('F15', '4');
        $sheet->setCellValue('F16', '5');
        $sheet->setCellValue('F17', '1');
        $sheet->setCellValue('F18', '16');
        $sheet->setCellValue('F19', '5');
        $sheet->setCellValue('F20', '6');
        $sheet->setCellValue('F21', '116');
        $sheet->setCellValue('F22', '63');
        $sheet->setCellValue('F23', '34');
        $sheet->setCellValue('F24', '29');
        $sheet->setCellValue('F25', '1950');

        $sheet->setCellValue('G9', '1096');
        $sheet->setCellValue('G10', '332');
        $sheet->setCellValue('G11', '553');
        $sheet->setCellValue('G12', '0');
        $sheet->setCellValue('G13', '0');
        $sheet->setCellValue('G14', '0');
        $sheet->setCellValue('G15', '4');
        $sheet->setCellValue('G16', '5');
        $sheet->setCellValue('G17', '3');
        $sheet->setCellValue('G18', '17');
        $sheet->setCellValue('G19', '5');
        $sheet->setCellValue('G20', '6');
        $sheet->setCellValue('G21', '117');
        $sheet->setCellValue('G22', '63');
        $sheet->setCellValue('G23', '34');
        $sheet->setCellValue('G24', '29');
        $sheet->setCellValue('G25', '1981');

        $sheet->getStyle('A25:G25')->getFont()->setBold(true);
        $sheet->getStyle('B7:G8')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A7:G25')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        $writer = new Xlsx($spreadsheet);
        $fileName = 'proyas'.time().'.xlsx';
        $writer->save($fileName);

        return response()->download($fileName);
       
    }
}
