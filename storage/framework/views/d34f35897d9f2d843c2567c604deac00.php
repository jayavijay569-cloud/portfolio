<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management - Admin & Intern Access</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body { background-color: #f0f4ff; height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; }
        .login-card { background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); width: 100%; max-width: 450px; }
        .role-button { display: flex; flex-direction: column; align-items: center; padding: 20px; border: 1px solid #e0e0e0; border-radius: 10px; text-decoration: none; color: #333; transition: 0.3s; margin-bottom: 15px; background: #fff; cursor: pointer; }
        .role-button:hover { border-color: #0d6efd; background-color: #f8fbff; transform: translateY(-2px); color: #0d6efd; }
        .role-icon { font-size: 2rem; color: #0d6efd; margin-bottom: 10px; }
        .hidden { display: none; }
        .modal-content { border-radius: 15px; border: none; }
    </style>
</head>
<body>

    <div class="container d-flex justify-content-center">
        <div class="login-card text-center shadow">
            <h2 class="fw-bold mb-1">Task Management System</h2>
            <p class="text-muted mb-4">Select your role to continue</p>

            <div class="role-button" data-bs-toggle="modal" data-bs-target="#adminModal">
                <i class="bi bi-shield-lock role-icon"></i>
                <span class="fw-bold">Login as Admin</span>
            </div>

            <div class="role-button" data-bs-toggle="modal" data-bs-target="#internModal">
                <i class="bi bi-person-circle role-icon"></i>
                <span class="fw-bold">Login as Intern</span>
            </div>
        </div>
    </div>

    <div class="modal fade" id="adminModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-body p-4">
                    <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                    
                    <div id="adminLoginSection">
                        <h3 class="fw-bold text-center mb-4">Admin Login</h3>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Admin Email</label>
                                <input type="email" class="form-control p-2" placeholder="admin@system.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control p-2" placeholder="••••••••">
                            </div>
                            <button type="submit" class="btn btn-dark w-100 py-2 mb-3">Login as Admin</button>
                            <p class="text-center small">New Admin? <a href="javascript:void(0)" onclick="toggleAdminForms()" class="text-primary fw-bold text-decoration-none">Create Account</a></p>
                        </form>
                    </div>

                    <div id="adminSignupSection" class="hidden">
                        <h3 class="fw-bold text-center mb-4">Admin Registration</h3>
                        <form>
                            <div class="mb-3"><label class="form-label">Full Name</label><input type="text" class="form-control p-2"></div>
                            <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control p-2"></div>
                            <div class="mb-3"><label class="form-label">Secret Key</label><input type="password" class="form-control p-2" placeholder="Enter Admin Secret Code"></div>
                            <button type="submit" class="btn btn-dark w-100 py-2 mb-3">Register Admin</button>
                            <p class="text-center small">Already Admin? <a href="javascript:void(0)" onclick="toggleAdminForms()" class="text-primary fw-bold text-decoration-none">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="internModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-body p-4">
                    <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                    
                    <div id="internLoginSection">
                        <h3 class="fw-bold text-center mb-4">Intern Login</h3>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control p-2" placeholder="intern@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control p-2" placeholder="••••••••">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 mb-3">Sign In</button>
                            <p class="text-center small">Don't have an account? <a href="javascript:void(0)" onclick="toggleInternForms()" class="text-primary fw-bold text-decoration-none">Sign Up</a></p>
                        </form>
                    </div>

                    <div id="internSignupSection" class="hidden">
                        <h3 class="fw-bold text-center mb-4">Intern Sign Up</h3>
                        <form>
                            <div class="mb-3"><label class="form-label">Full Name</label><input type="text" class="form-control p-2"></div>
                            <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control p-2"></div>
                            <div class="mb-3"><label class="form-label">Password</label><input type="password" class="form-control p-2"></div>
                            <button type="submit" class="btn btn-success w-100 py-2 mb-3">Register Now</button>
                            <p class="text-center small">Already have an account? <a href="javascript:void(0)" onclick="toggleInternForms()" class="text-primary fw-bold text-decoration-none">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle for Admin Modal
        function toggleAdminForms() {
            document.getElementById('adminLoginSection').classList.toggle('hidden');
            document.getElementById('adminSignupSection').classList.toggle('hidden');
        }

        // Toggle for Intern Modal
        function toggleInternForms() {
            document.getElementById('internLoginSection').classList.toggle('hidden');
            document.getElementById('internSignupSection').classList.toggle('hidden');
        }
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\intern_work\Task1\task-app\resources\views/home.blade.php ENDPATH**/ ?>