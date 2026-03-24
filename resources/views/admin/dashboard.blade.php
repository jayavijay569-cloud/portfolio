<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .dashboard-container { padding: 30px; }
        
        /* Stat Cards Style (from image_2.png) */
        .stat-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 25px;
            height: 100%;
        }
        .stat-label { color: #6c757d; font-size: 0.95rem; font-weight: 500; }
        .stat-value { font-size: 2.5rem; font-weight: bold; margin-top: 5px; line-height: 1; }
        
        /* Status Colors */
        .color-total { color: #212529; }
        .color-pending { color: #6c757d; }
        .color-progress { color: #0d6efd; }
        .color-completed { color: #198754; }

        /* All Tasks Section */
        .tasks-header { display: flex; justify-content: space-between; align-items: center; margin-top: 40px; margin-bottom: 20px; }
        .empty-state {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 50px 20px;
            text-align: center;
            color: #6c757d;
        }

        /* Modal Custom Style (matching image_3.png) */
        .modal-content { border-radius: 15px; border: none; }
        .modal-header { border-bottom: none; padding-bottom: 0; }
        .modal-body { padding-top: 10px; }
        .form-label { font-weight: 500; color: #333; margin-bottom: 5px; }
        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fcfcfc;
        }
        .form-control:focus, .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        }
        /* Style for the bordered input from your image */
        .input-bordered {
            border: 2px solid #ddd !important;
        }
        /* Black button style */
        .btn-create-final {
            background-color: #000;
            color: #fff;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            border: none;
            width: 100%;
        }
        .btn-create-final:hover { background-color: #222; color: #fff; }
    </style>
</head>
<body>

    <div class="container-fluid dashboard-container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="fw-bold mb-0">Admin Dashboard</h2>
                <p class="text-muted">Welcome back, Admin User</p>
            </div>
            <button class="btn btn-outline-dark d-flex align-items-center gap-2" style="border-radius: 8px;">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-6 col-md-3">
                <div class="stat-card shadow-sm">
                    <div class="stat-label">Total Tasks</div>
                    <div class="stat-value color-total">0</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card shadow-sm">
                    <div class="stat-label">Pending</div>
                    <div class="stat-value color-pending">0</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card shadow-sm">
                    <div class="stat-label">In Progress</div>
                    <div class="stat-value color-progress">0</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card shadow-sm">
                    <div class="stat-label">Completed</div>
                    <div class="stat-value color-completed">0</div>
                </div>
            </div>
        </div>

        <div class="tasks-header">
            <h4 class="fw-bold mb-0">All Tasks</h4>
            <button class="btn btn-dark d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#createTaskModal" style="background-color: #111; border-radius: 8px;">
                <i class="bi bi-plus-lg"></i> Create Task
            </button>
        </div>

        <div class="empty-state shadow-sm">
            <p class="mb-0">No tasks yet. Click "Create Task" to get started.</p>
        </div>
    </div>

    <div class="modal fade" id="createTaskModal" tabindex="-1" aria-labelledby="createTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title fw-bold" id="createTaskModalLabel">Create New Task</h5>
                        <small class="text-muted">Assign a new task to an intern</small>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label for="taskTitle" class="form-label">Task Title</label>
                            <input type="text" class="form-control input-bordered" id="taskTitle" placeholder="Enter task title">
                        </div>

                        <div class="mb-3">
                            <label for="taskDesc" class="form-label">Description</label>
                            <textarea class="form-control" id="taskDesc" rows="3" placeholder="Enter task description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="assignTo" class="form-label">Assign To</label>
                            <select class="form-select text-muted" id="assignTo">
                                <option selected>Select an intern</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="priority" class="form-label">Priority</label>
                            <select class="form-select" id="priority">
                                <option value="low">Low</option>
                                <option value="medium" selected>Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="dueDate" class="form-label">Due Date (Optional)</label>
                            <input type="date" class="form-control text-muted" id="dueDate">
                        </div>

                        <button type="submit" class="btn-create-final">Create Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>