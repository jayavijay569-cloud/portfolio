<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Dashboard - My Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .dashboard-container { padding: 30px; }
        .stat-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 20px;
            transition: transform 0.2s;
        }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .stat-label { color: #6c757d; font-size: 0.9rem; font-weight: 500; }
        .stat-value { font-size: 2rem; font-weight: bold; margin-top: 5px; }
        
        /* Status Colors */
        .color-total { color: #212529; }
        .color-pending { color: #6c757d; }
        .color-progress { color: #0d6efd; }
        .color-completed { color: #198754; }

        .empty-state {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 60px 20px;
            text-align: center;
            color: #6c757d;
            margin-top: 25px;
        }
        .logout-btn { border-radius: 8px; font-weight: 500; }
    </style>
</head>
<body>

    <div class="container-fluid dashboard-container">
        <div class="d-flex justify-content-between align-items-start mb-5">
            <div>
                <h2 class="fw-bold mb-0">My Tasks</h2>
                <p class="text-muted">Welcome back, John Doe</p>
            </div>
            <button class="btn btn-outline-dark logout-btn d-flex align-items-center gap-2">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </div>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-label">Total Tasks</div>
                    <div class="stat-value color-total">0</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-label">Pending</div>
                    <div class="stat-value color-pending">0</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-label">In Progress</div>
                    <div class="stat-value color-progress">0</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-label">Completed</div>
                    <div class="stat-value color-completed">0</div>
                </div>
            </div>
        </div>

        <div class="empty-state shadow-sm">
            <p class="mb-0 fs-5">No tasks assigned to you yet.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>