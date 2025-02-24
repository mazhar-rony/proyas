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
            padding: 5px 2px;
            text-align: left;
        }
        @page {
            margin-top: 4cm;
            margin-header: 2cm;
            margin-footer: 2cm;
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
            
            
            <table style="border: none; width: 100%; border-collapse: collapse;margin-bottom:20px;">
                <tr>
                    <td style="vertical-align: middle; height: 100%; border: none;">
                        <div style="display: inline-block; text-align: center;">
                            <span>---------------------</span><br>
                            <span><strong>Prepared By</strong></span>
                        </div>
                    </td>
                    <td style="text-align: center; vertical-align: middle; height: 100%; border: none;">
                        <div style="display: inline-block; text-align: center;">
                            <span>---------------------</span><br>
                            <span><strong>Checked By</strong></span>
                        </div>
                    </td>
                    <td style="text-align: right; vertical-align: middle; height: 100%; border: none;">
                        <div style="display: inline-block; text-align: center;">
                            <span>---------------------</span><br>
                            <span><strong>Approved By</strong></span>
                        </div>
                    </td>
                </tr>
            </table>
            <table style="border: none; width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="border: none;">
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
            <td>Jagoron</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Agrosor</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Jagoron</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Buniad</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td>ENRICH</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td>LEPIG</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td> Proyas SME</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Agrosor- SMART Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td> Agrosor-MFCE Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Agrosor-Raise Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Agrosor-SEP Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td> Common Service Loan-SEP</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td>ECCCP-Drought Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td> KGF Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Lift Loan</td>
            <td>1001</td>
            <td>96</td>
            <td>1096</td>
            <td>25</td>
            <td>25</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Sufolon Loan</td>
            <td>334</td>
            <td>8</td>
            <td>332</td>
            <td>11</td>
            <td>11</td>
            <td>22</td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
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
            <th rowspan="2"> Total Savings Balance </th>
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
            <th colspan="12">Jagoron</th>
        </tr>
        <tr>
            <td>General Savings</td>
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
            <td>Volentary Saving</td>
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
            <td>Volentary Saving</td>
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
            <td>Proyas S.Savings</td>
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
            <td> Category Total</td>
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
            <th colspan="12">Agrosor</th>
        </tr>
        <tr>
            <td>General Savings</td>
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
            <td>Volentary Saving</td>
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
            <td>Volentary Saving</td>
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
            <td>Proyas S.Savings</td>
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
            <td> Category Total</td>
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
            <th colspan="12">Buniad</th>
        </tr>
        <tr>
            <td>General Savings</td>
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
            <td>Volentary Saving</td>
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
            <td>Volentary Saving</td>
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
            <td>Proyas S.Savings</td>
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
            <td><strong>Category Total</strong></td>
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
            <td><strong>Total</strong></td>
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
            <td><strong>Grand Total</strong></td>
            <td colspan="2"><strong>11</strong></td>
            {{-- <td>22</td> --}}
            <td colspan="2"><strong>33</strong></td>
            {{-- <td>44</td> --}}
            {{-- <td>55</td> --}}
            <td colspan="2"><strong>66</strong></td>
            {{-- <td>77</td> --}}
            {{-- <td>88</td> --}}
            <td colspan="2"><strong>99</strong></td>
            {{-- <td>00</td> --}}
            <td colspan="2"><strong>1111111111</strong></td>
        </tr>
        <tr>
            <td> General Savings</td>
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
            <td>General Savings</td>
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
            <td> Proyas S.Savings</td>
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
                <td>Total</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>Jagoron</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>Agrosor</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>Buniad</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>ENRICH IGA</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>LEPIG</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>Proyas SME</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>Proyas S.Savings</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>Volentary Saving</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
                <td>11</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
