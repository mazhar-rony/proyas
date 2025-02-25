<!DOCTYPE html>
<html>
<head>
    <title>Savings Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
        }
        .page-break {
            page-break-after: always;
        }
        .header {
            text-align: center;
            line-height: 8px;
        }
        .header-f{
            text-align: right !important;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px 5px;
        }
        th {
            text-align: center;
        }
        td {
            text-align: right;
        }
        .text-left {
            text-align: left;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        @page {
            margin-top: 4cm;
            margin-header: 2cm;
            margin-footer: 0cm;
            header: page-header;
            footer: page-footer;
        }
        *{
            padding:0; 
            margin: 0;
        }

    </style>
</head>
<body>

    <htmlpageheader name="page-header">
        <div class="header">
            <h2>Proyas Manobik Unnayan Society</h2>
            <p>Office Code : 0001, Name : Unit-01 Gobratala</p>
            <h3>Savings Statements</h3>
        </div>
        <div class="header-f">
            <span><strong>POMIS-1</strong></span>
        </div>
        <span>
            <strong>@php echo date('F-Y'); @endphp</strong>
        </span>
    </htmlpageheader>
    
    <htmlpagefooter name="page-footer">
        <div class="footer">
            <table style="border: none; width: 100%; border-collapse: collapse; margin-bottom: 40px;">
                <tr>
                    <td style="text-align: left; vertical-align: middle; height: 100%; border: none;">
                        <div style="display: inline-block; text-align: center;">
                            <span>---------------------</span><br>
                            <span>Prepared By</span>
                        </div>
                    </td>
                    <td style="text-align: center; vertical-align: middle; height: 100%; border: none;">
                        <div style="display: inline-block; text-align: center;">
                            <span>---------------------</span><br>
                            <span>Checked By</span>
                        </div>
                    </td>
                    <td style="text-align: right; vertical-align: middle; height: 100%; border: none;">
                        <div style="display: inline-block; text-align: center;">
                            <span>---------------------</span><br>
                            <span>Approved By</span>
                        </div>
                    </td>
                </tr>
            </table>
            <table style="border: none; width: 100%; border-collapse: collapse; margin-bottom:20px;">
                <tr>
                    <td style="border: none; text-align: left;">
                        @php
                            echo "Printed Date : ". date('d-M-Y');
                        @endphp
                    </td>
                    <td style="border: none; text-align: right;">
                        <p>Page {PAGENO} of {nbpg}</p>
                    </td>
                </tr>
            </table>
        </div>
    </htmlpagefooter>
   
<div>
    <h3>1. Samity and Members Information</h3>

    <table>
        <tr>
            <th rowspan="2">Program</th>
            <th colspan="3">Samities</th>
            <th colspan="3">Members</th>
        </tr>
        <tr>
            <th>Male</th>
            <th>Female</th>
            <th>Total</th>
            <th>Male</th>
            <th>Female</th>
            <th>Total</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td class="text-left">{{ $data->program }}</td>
            <td>{{ $data->samity_male }}</td>
            <td>{{ $data->samity_female }}</td>
            <td>{{ $data->samity_male + $data->samity_female }}</td>
            <td>{{ $data->member_male }}</td>
            <td>{{ $data->member_female }}</td>
            <td>{{ $data->member_male + $data->member_female }}</td>
        </tr>
        @endforeach
        <tr>
            <td class="text-left"><strong>Total</strong></td>
            <td><strong>{{ $totalSamityMale }}</strong></td>
            <td><strong>{{ $totalSamityFemale }}</strong></td>
            <td><strong>{{ $totalSamityMemberCount }}</strong></td>
            <td><strong>{{ $totalMemberMale }}</strong></td>
            <td><strong>{{ $totalMemberFemale }}</strong></td>
            <td><strong>{{ $totalMemberCount }}</strong></td>
        </tr>
    </table>
</body>
</html>
