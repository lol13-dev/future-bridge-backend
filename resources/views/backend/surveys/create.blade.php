<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Survey | FutureBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 600px;">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Create New Survey</h2>
            <a href="{{ route('admin.surveys.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>

        <form action="{{ route('admin.surveys.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">Creator Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Survey Title</label>
                <input type="text" name="title" class="form-control" required placeholder="e.g., Student Feedback 2026">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Briefly describe the survey's goal..."></textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Status</label>
                <select name="is_active" class="form-select">
                    <option value="1">Active (Visible)</option>
                    <option value="0">Inactive (Hidden)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100">Save Survey</button>
        </form>

    </div>
</body>
</html>