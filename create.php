<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTrack - Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Sidebar Toggle Button (Mobile) -->
    <button class="btn btn-primary toggle-btn" id="sidebarToggle">
        <i class="bi bi-list"></i>
    </button>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="p-3 text-center">
            <h4 class="mb-0">EduTrack</h4>
            <p class="small mb-3">Student Management System</p>
        </div>
        <hr class="mx-3 bg-light opacity-25">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link" href="index.php" data-bs-toggle="tab">
                    <i class="bi bi-people"></i> Students
                </a>
            </li>


        </ul>
        <hr class="mx-3 bg-light opacity-25">
        <div class="px-3 mb-3">
            <div class="d-flex align-items-center">
                <div class="student-avatar me-2">
                    <i class="bi bi-person"></i>
                </div>
                <div>
                    <h6 class="mb-0">Admin User</h6>
                    <small>Administrator</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="tab-content">


            <!-- Students Tab -->
            <div class="tab-pane fade show active" id="students">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Student Management</h2>
                    <a href="index.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-2"></i>Back to List
                    </a>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <form action="store_student.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" id="fullName" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select" required>
                                        <option selected disabled>Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" id="address" name="address" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="date_added" class="form-label">Date Added</label>
                                    <input type="date" id="date_added" name="date_added" class="form-control" required>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-2"></i>Save Student
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>



        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>