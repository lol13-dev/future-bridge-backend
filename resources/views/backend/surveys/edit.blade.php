<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Survey | FutureBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 600px;">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Edit Survey</h2>
            <a href="{{ route('admin.surveys.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>

        <form action="{{ route('admin.surveys.update', $survey->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-bold">Creator Name</label>
                <input type="text" name="name" class="form-control" value="{{ $survey->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Survey Title</label>
                <input type="text" name="title" class="form-control" value="{{ $survey->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ $survey->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Status</label>
                <select name="is_active" class="form-select">
                    <option value="1" {{ $survey->is_active == 1 ? 'selected' : '' }}>Active (Visible)</option>
                    <option value="0" {{ $survey->is_active == 0 ? 'selected' : '' }}>Inactive (Hidden)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-warning w-100">Update Survey</button>
        </form>

    </div>
</body>
</html>