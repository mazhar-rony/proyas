<!DOCTYPE html>
<html>
<head>
    <title>Savings Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .page-break {
            page-break-after: always;
        }
        .header {
            text-align: center;
            /* font-size: 14px; */
            /* font-weight: bold; */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
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
        tfoot td{
            font-weight: bold;
        }
        .container {
            display: flex; /* Makes the container a flex container */
            justify-content: space-between; /* Distributes space between items */
            align-items: center; /* Vertically centers the items */
            padding: 10px;
        }

        .left {
            text-align: left; /* Aligns text to the left */
        }

        .center {
            text-align: center; /* Aligns text to the center */
        }

        .right {
            text-align: right; /* Aligns text to the right */
        }
    </style>
</head>
<body>

    <!-- Page Header -->
    <div class="header">
        <h2>Proyas Manobik Unnayan Society</h2>
        <p> Office Code : 0001, Name : Unit-01 Gobratala</p>
        <p><strong>Savings Statements</strong></p>
    </div>
    <div>
        <p class="left"><strong>January-2025</strong></p>
        <p class="right"><strong> POMIS - 1</strong></p>
    </div>

    {{-- <hr> --}}

    <!-- Section 1: Samity and Members Information -->
    <p><strong>1. Samity and Members Information</strong></p>
    <table>
        <thead>
            <tr>
                <th rowspan="2">Program</th>
                <th colspan="3">Samities</th>
                <th colspan="3">Members</th>
            </tr>
            <tr>
                {{-- <th>Program</th> --}}
                <th>Male</th>
                <th>Female</th>
                <th>Total</th>
                <th>Male</th>
                <th>Female</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-left">Jagoron</td>
                <td>0</td>
                <td>94</td>
                <td>94</td>
                <td>12</td>
                <td>1084</td>
                <td>1096</td>
            </tr>
            <tr>
                <td class="text-left">Agrosor</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Buniad</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">ENRICH IGA</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">LEPIG</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Proyas SME</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Agrosor- SMART Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Agrosor-MFCE Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Agrosor-Raise Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Agrosor-SEP Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Common Service Loan-SEP</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">ECCCP-Drought Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">KGF Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Lift Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Lift Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
            <tr>
                <td class="text-left">Sufolon Loan</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td class="text-left">Total</td>
                <td>0</td>
                <td>83</td>
                <td>83</td>
                <td>11</td>
                <td>321</td>
                <td>332</td>
            </tr>
        </tfoot>
        <!-- More rows as needed -->
    </table>
    
    <table style="margin-top: 40%; margin-bottom: 0px; border:none;" width="100%">
        <tr style="border: none;">
            <td style="text-align: left; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 12px;">Prepared By</p>
            </td>
            <td style="text-align: center; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 12px">Checked By</p>
            </td>
            <td style="text-align: right; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 12px">Approved By</p>
            </td>
        </tr>
    </table>

    <div class="page-break"></div>

    <!-- Page Header -->
    <div class="header">
        <h2>Proyas Manobik Unnayan Society</h2>
        <p> Office Code : 0001, Name : Unit-01 Gobratala</p>
        <p><strong>Savings Statements</strong></p>
    </div>
    <div>
        <p class="left"><strong>January-2025</strong></p>
        <p class="right"><strong> POMIS - 1</strong></p>
    </div>

    <!-- Section 2: Savings Statement -->
    <p><strong>2. Savings Statement</strong></p>
    <table>
        <thead>
            <tr>
                <th rowspan="2">Program</th>
                <th colspan="2">Last Month<br>Savings Balance</th>
                <th colspan="2">Savings<br>Collection</th>
                <th colspan="2">Savings Transfer<br>This Month(Cat.Tr)</th>
                <th colspan="2">Savings Withdrwal<br>This Month</th>
                <th colspan="2">Savings Balance<br>End of Month</th>
                <th rowspan="2">Total<br>Savings<br>Balance</th>
            </tr>
            <tr>
                {{-- <th>Program</th> --}}
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
                <th class="left" colspan="12">Jagoron</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Volentary Saving</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Proyas S.Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="center" style="width: 16%; font-size: 10px;"><strong>Category Total</strong></td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <th class="left" colspan="12">Agrosor</th>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Volentary Saving</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Proyas S.Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="center" style="width: 16%; font-size: 10px;"><strong>Category Total</strong></td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <th class="left" colspan="12">Buniad</th>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Volentary Saving</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Proyas S.Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="center" style="width: 16%; font-size: 10px;"><strong>Category Total</strong></td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="center" style="width: 16%; font-size: 10px;"><strong>Total</strong></td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="center" style="width: 16%; font-size: 10px;"><strong>Grand Total</strong></td>
                <td colspan="2"><strong>33310886</strong></td>
                <td colspan="2"><strong>1280909</strong></td>
                <td colspan="2"><strong>0</strong></td>
                <td colspan="2"><strong>1708530</strong></td>
                <td colspan="2"><strong>32883265</strong></td>
                <td></td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">General Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Volentary Saving</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Proyas S.Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
                <td>52067</td>
                <td>5665208</td>
                <td>5717275</td>
            </tr>
        </tbody>
        <tfoot>
        
        </tfoot>
        <!-- More rows as needed -->
    </table>

    <table style="margin-top: 8%; margin-bottom: 0px; border:none;" width="100%">
        <tr style="border: none;">
            <td style="text-align: left; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 14px;">Prepared By</p>
            </td>
            <td style="text-align: center; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 14px">Checked By</p>
            </td>
            <td style="text-align: right; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 14px">Approved By</p>
            </td>
        </tr>
    </table>

    <div class="page-break"></div>

     <!-- Page Header -->
     <div class="header">
        <h2>Proyas Manobik Unnayan Society</h2>
        <p> Office Code : 0001, Name : Unit-01 Gobratala</p>
        <p><strong>Savings Statements</strong></p>
    </div>
    <div>
        <p class="left"><strong>January-2025</strong></p>
        <p class="right"><strong> POMIS - 1</strong></p>
    </div>

    <!-- Section 3: Member Admission, Dropout, Savers -->
    <p><strong>3. Member Admission, Dropout, Savers and Attendance Status</strong></p>
    
    <table>
        <thead>
            <tr>
                <th>Program</th>
                <th>Last<br>Month<br>Members</th>
                <th>Admission<br>in this<br>Month</th>
                <th>Member<br>Transfer<br>(+)(-)</th>
                <th>Dropout<br>in this<br>Month</th>
                <th>Members<br>end of the<br>Month</th>
                <th>Average<br>Savers<br>This<br>Month</th>
                <th>No. Of<br>With<br>Drawal<br>Member</th>
                <th>Average<br>Member<br>Attendance<br>this Month</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="left" style="width: 16%;"><strong>Total</strong></td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Jagoron</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Agrosor</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Buniad</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">ENRICH IGA</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">LEPIG</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Proyas SME</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Proyas S.Savings</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
            <tr>
                <td class="left" style="width: 16%;">Volentary Saving</td>
                <td>49256</td>
                <td>5544103</td>
                <td>10311</td>
                <td>374047</td>
                <td>0</td>
                <td>69236</td>
                <td>7500</td>
                <td>322178</td>
            </tr>
        </tbody>
        <tfoot>
        
        </tfoot>
        <!-- More rows as needed -->
    </table>
    
    <table style="margin-top: 80%; margin-bottom: 0px; border:none;" width="100%">
        <tr style="border: none;">
            <td style="text-align: left; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 14px;">Prepared By</p>
            </td>
            <td style="text-align: center; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 14px">Checked By</p>
            </td>
            <td style="text-align: right; width: 33%; border: none;">
                <p>------------------------</p>
                <p style="font-size: 14px">Approved By</p>
            </td>
        </tr>
    </table>

</body>
</html>
