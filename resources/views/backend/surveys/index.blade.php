<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Surveys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 rounded shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Survey Management</h2>
            <a href="{{ route('admin.surveys.create') }}" class="btn btn-primary">+ Create New Survey</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Description</th> <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($surveys as $survey)
                    <tr>
                        <td>{{ $survey->id }}</td>
                        <td>{{ $survey->name }}</td>
                        <td>{{ $survey->title }}</td>
                        <td style="max-width: 300px;">
                            {{ $survey->description }}
                        </td>
                        <td>
                            @if($survey->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.surveys.edit', $survey->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>