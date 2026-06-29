<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | FutureBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold" href="#">FutureBridge Admin</a>
            <div class="d-flex">
                <a href="/" class="btn btn-outline-light btn-sm">View Frontend Site</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        
        <div class="row mb-4">
            <div class="col">
                <h2 class="fw-bold text-dark">Dashboard Overview</h2>
                <p class="text-muted">Welcome to the control panel. Your backend routing is successful!</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h6 class="text-muted text-uppercase fw-semibold mb-2">Active Programs</h6>
                        <h2 class="fw-bold text-primary mb-0">12</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h6 class="text-muted text-uppercase fw-semibold mb-2">Registered Students</h6>
                        <h2 class="fw-bold text-success mb-0">148</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h6 class="text-muted text-uppercase fw-semibold mb-2">Pending Applications</h6>
                        <h2 class="fw-bold text-warning mb-0">5</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>