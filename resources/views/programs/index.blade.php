<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyas - Program</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Toastify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.11.2/src/toastify.min.css">
</head>
<body>
<div class="container mt-4">
    <!-- Bootstrap Card -->
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">Program List</h4>
            <!-- Add Button -->
            <a href="{{ route('programs.create') }}" class="btn btn-primary">Add New</a>
        </div>
        <div class="card-body">
            <!-- Table -->
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programs as $program)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $program->name }}</td>
                        <td>{{ $program->description }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Delete Button (with confirmation) -->
                            <form action="{{ route('programs.destroy', $program->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $programs->links() }}
        </div>
    </div>
</div>
<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<!-- Toastify JS -->
<script src="https://cdn.jsdelivr.net/npm/toastify-js@1.11.2/src/toastify.min.js"></script>

<script>
    // Show Toast Message
    @if(session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            gravity: "top",
            position: 'right',
            backgroundColor: "#4caf50",
            stopOnFocus: true,
        }).showToast();
    @endif
    @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            gravity: "top",
            position: 'right',
            backgroundColor: "#f44336",
            stopOnFocus: true,
        }).showToast();
    @endif
</script>

</body>
</html>