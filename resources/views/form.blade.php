<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Office Wise Consolidate Report</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <button type="submit" class="btn btn-primary">Generate PDF</button>
    <a href="{{ route('showdata') }}" class="btn btn-success">Show Data</a>
  </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>