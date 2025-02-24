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
        <tr>
            <td class="text-left">Jagoron</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">Agrosor</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left">Buniad</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">ENRICH IGA</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left">LEPIG</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">Proyas SME</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left">Agrosor- SMART Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">Agrosor-MFCE Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left">Agrosor-Raise Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">Agrosor-SEP Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left">Common Service Loan-SEP</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">ECCCP-Drought Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left">KGF Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">Lift Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left">Lift Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td class="text-left">Sufolon Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td class="text-left"><strong>Total</strong></td>
            <td><strong>0</strong></td>
            <td><strong>94</strong></td>
            <td><strong>94</strong></td>
            <td><strong>31</strong></td>
            <td><strong>1950</strong></td>
            <td><strong>1981</strong></td>
        </tr>
       
    </table>

    <pagebreak />

    <h3>2. Savings Statement</h3>

    <table>
        <tr>
            <th rowspan="2">Program</th>
            <th colspan="2">Last Month Savings Balance</th>
            <th colspan="2">Savings Collection </th>
            <th colspan="2">Savings Transfer This Month(Cat.Tr) </th>
            <th colspan="2">Savings Withdrwal This Month</th>
            <th colspan="2">Savings Balance End of Month</th>
            <th rowspan="2">Total Savings Balance </th>
        </tr>

        <tr>
            <th>Male</th>
            <th>Female</th>
            <th>Male</th>
            <th>Female</th>
            <th>Male</th>
            <th>Female</th>
            <th>Male</th>
            <th>Female</th>
            <th>Male</th>
            <th>Female</th>
        </tr>
        <tr>
            <th colspan="12" style="text-align: left;">Jagoron</th>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Volentary Saving</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Proyas S.Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-center" style="width: 15%;"><strong>Category Total</strong></td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <th colspan="12" style="text-align: left;">Agrosor</th>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Volentary Saving</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Proyas S.Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-center" style="width: 15%;"><strong>Category Total</strong></td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        {{--  --}}
        <tr>
            <th colspan="12" style="text-align: left;">Buniad</th>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Volentary Saving</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Proyas S.Savings</td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-center" style="width: 15%;"><strong>Category Total</strong></td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-center" style="width: 15%;"><strong>Total</strong></td>
            <td>11</td>
            <td>22</td>
            <td>33</td>
            <td>44</td>
            <td>55</td>
            <td>66</td>
            <td>77</td>
            <td>88</td>
            <td>99</td>
            <td>00</td>
            <td>1111111111</td>
        </tr>
        <tr>
            <td class="text-center" style="width: 15%;"><strong>Grand Total</strong></td>
            <td colspan="2"><strong>33310886</strong></td>
            <td colspan="2"><strong>1280909</strong></td>
            <td colspan="2"><strong>0</strong></td>
            <td colspan="2"><strong>1708530</strong></td>
            <td colspan="2"><strong>32883265</strong></td>
            <td></td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>184457</td>
            <td>4791346</td>
            <td>5500</td>
            <td>4400</td>
            <td colspan="2"></td>
            <td>73100</td>
            <td>122843</td>
            <td>116857</td>
            <td>4839118</td>
            <td>4955975</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">General Savings</td>
            <td>184457</td>
            <td>4791346</td>
            <td>5500</td>
            <td>4400</td>
            <td colspan="2"></td>
            <td>73100</td>
            <td>122843</td>
            <td>116857</td>
            <td>4839118</td>
            <td>4955975</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Volentary Saving</td>
            <td>184457</td>
            <td>4791346</td>
            <td>5500</td>
            <td>4400</td>
            <td colspan="2"></td>
            <td>73100</td>
            <td>122843</td>
            <td>116857</td>
            <td>4839118</td>
            <td>4955975</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 15%;">Proyas S.Savings</td>
            <td>184457</td>
            <td>4791346</td>
            <td>5500</td>
            <td>5500</td>
            <td colspan="2"></td>
            <td>73100</td>
            <td>122843</td>
            <td>116857</td>
            <td>4839118</td>
            <td>4955975</td>
        </tr>
    </table>

    <pagebreak />

    <h3>3. Member Admission, Dropout, Savers and Attendance Status</h3>

    <table>
        <tr>
            <th>Program</th>
            <th>Last Month Members</th>
            <th>Admission in this Month</th>
            <th>Member Transfer(+)(-)</th>
            <th>Dropout in this Month</th>
            <th>Members end of the Month</th>
            <th>Average Savers This Month</th>
            <th>No. Of With Drawal Member</th>
            <th>Average Member Attendance this Month</th>
        </tr>
        <tbody>
            <tr>
                <td class="text-left" style="width: 15%;"><strong>Total</strong></td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>1235</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">Jagoron</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>121</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">Agrosor</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>0</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">Buniad</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>56</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">ENRICH IGA</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>1300</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">LEPIG</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>0</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">Proyas SME</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>0</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">Proyas S.Savings</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>0</td>
            </tr>
            <tr>
                <td class="text-left" style="width: 15%;">Volentary Saving</td>
                <td>1235</td>
                <td>121</td>
                <td>0</td>
                <td>56</td>
                <td>1300</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <hr style="border: 1px solid black; margin-top: 15px;">
</body>
</html>
