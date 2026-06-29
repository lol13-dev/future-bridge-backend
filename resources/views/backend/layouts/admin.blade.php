<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Admin Dashboard') | FutureBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .sidebar { min-height: 100vh; width: 250px; background-color: #212529; }
        .sidebar a { color: #adb5bd; text-decoration: none; padding: 12px 20px; display: block; }
        .sidebar a:hover, .sidebar a.active { color: #fff; background-color: #343a40; }
        .content-area { flex-grow: 1; background-color: #f8f9fa; }
    </style>
</head>
<body class="d-flex">

    <div class="sidebar d-flex flex-column">
        <h4 class="text-white text-center py-4 mb-0 fw-bold border-bottom border-secondary">
            FutureBridge
        </h4>
        
        <div class="d-flex flex-column flex-grow-1 mt-3">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Overview
            </a>
            
            <a href="{{ route('admin.surveys.index') }}" class="{{ request()->routeIs('admin.surveys.*') ? 'active' : '' }}">
                <i class="bi bi-card-checklist me-2"></i> Surveys
            </a>

            <a href="#">
                <i class="bi bi-people me-2"></i> Users
            </a>
            <a href="#">
                <i class="bi bi-shield-lock me-2"></i> Audit Logs
            </a>
        </div>

        <div class="p-3 border-top border-secondary">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <div class="content-area p-5">
        @yield('content') 
    </div>

</body>
</html>