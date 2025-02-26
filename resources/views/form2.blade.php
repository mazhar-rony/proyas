<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Office Wise Consolidate Report</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        font-family: Arial, sans-serif;
        font-size: 11px;
        padding: 10px 20px;
    }
    .page-break {
        page-break-after: always;
    }
    .header {
        text-align: center;
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
    button:hover {
        cursor: pointer;
    }
    label {
      font-size: 14px;
    }
    *{
        padding:0; 
        margin: 0;
    }

</style>
</head>
<body>

<div class="container mt-5 mb-5">
  <h4>POMIS1 Office Wise Consolidate Report</h4>
  <hr>
  <form action="{{ route('report') }}" method="POST">
    @csrf
    <!-- Select Dropdown -->
    <div class="mb-3">
      <label for="exampleFormControlSelect1" class="form-label">Head Office</label>
      <select class="form-select" id="exampleFormControlSelect1">
        <option selected>Choose...</option>
        <option>100000 Proyas Consolidate</option>
      </select>
    </div>

    <!-- Radio Buttons (Horizontal) -->
    <div class="mb-3">
      {{-- <label class="form-label">Choose an option</label> --}}
      <div class="d-flex"> <!-- Use flexbox to align radio buttons horizontally -->
        <div class="form-check me-3"> <!-- Add margin to the right for spacing -->
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Zone wise
          </label>
        </div>
        <div class="form-check me-3">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Program/Project
          </label>
        </div>
      </div>
    </div>

    <!-- Select Dropdown -->
    <div class="mb-3">
        <label for="exampleFormControlSelect1" class="form-label">Zone Office</label>
        <select class="form-select" id="exampleFormControlSelect1">
          <option selected>Choose...</option>
          <option>01 Zone-01-Chapainawabganj</option>
        </select>
    </div>

    <!-- Select Dropdown -->
    <div class="mb-3">
        <label for="exampleFormControlSelect1" class="form-label">Area Office</label>
        <select class="form-select" id="exampleFormControlSelect1">
          <option selected>Choose...</option>
          <option>101 Chapainawabganj Area</option>
        </select>
    </div>

    <!-- Select Dropdown -->
    <div class="mb-3">
        <label for="exampleFormControlSelect1" class="form-label">Office</label>
        <select class="form-select" id="exampleFormControlSelect1">
          <option selected>Choose...</option>
          <option>0001 Unit-01 Gobratala</option>
        </select>
    </div>

    <!-- Date Field -->
    <div class="mb-3">
        <label for="exampleDate" class="form-label">Select a date</label>
        <input type="date" class="form-control" id="exampleDate">
      </div>

    <!-- Select Dropdown -->
    <div class="mb-3">
        <label for="exampleFormControlSelect1" class="form-label">Export Type</label>
        <select class="form-select" id="exampleFormControlSelect1">
          <option selected>Choose...</option>
          <option>View As PDF</option>
        </select>
    </div>

    <!-- Submit Button -->
    {{-- <button type="submit" class="btn btn-primary">Generate PDF</button>
    <a href="{{ route('showdata') }}" class="btn btn-success">Show Data</a>
    <a href="{{ route('view') }}" class="btn btn-warning">View</a> --}}
    <button id="loadData" class="btn btn-primary">Show</button>
  </form>
  <div id="dataTable" style="margin-top: 50px;"></div>
</div>


<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
  $html = `<div>
        <div class="header">
            <h5>Proyas Manobik Unnayan Society</h5>
            <p>Office Code : 0001, Name : Unit-01 Gobratala</p>
            <h6>Savings Statements</h6>
        </div>
        <div class="header-f">
            <span><strong>POMIS-1</strong></span>
        </div>
        <span>
            <strong>@php echo date('F-Y'); @endphp</strong>
        </span>
   

        <h6 style="margin-top: 50px;">1. Samity and Members Information</h6>

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

        <h6 style="margin-top: 50px;">2. Savings Statement</h6>

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

        <h6 style="margin-top: 50px;">3. Member Admission, Dropout, Savers and Attendance Status</h6>

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

        <div style="margin-top: 20px; text-align: center;">
          <button id="printButton">Print</button>
          <a href="{{ route('report') }}" target="_blank"><button id="pdfButton" style="padding: 5px;">PDF</button></a>
        </div>
    </div>`;

  $(document).ready(function() {
            $("#loadData").on("click", function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ route('view') }}", 
                    type: "GET",
                    success: function(response) {
                        $("#dataTable").html($html);
                        $("#printButton").addClass("btn btn-primary");
                        $("#pdfButton").addClass("btn btn-success");
                    },
                    error: function() {
                        $("#dataTable").html("<p>Error loading data.</p>");
                    }
                });
            });
        });
</script>
</body>
</html>