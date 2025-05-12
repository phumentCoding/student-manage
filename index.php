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
                    <a href="create.php" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-2"></i>Add New Student
                    </a>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                       

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="selectAll">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date Added</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="student-avatar me-2">JD</div>
                                                <span>John Doe</span>
                                            </div>
                                        </td>
                                        <td><span class="gender-badge gender-male">Male</span></td>
                                        <td>123 Main St, Anytown</td>
                                        <td>555-123-4567</td>
                                        <td>john.doe@example.com</td>
                                        <td>May 7, 2025</td>
                                        <td>
                                           
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="modal" data-bs-target="#editStudentModal">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="modal" data-bs-target="#deleteStudentModal">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="student-avatar me-2">JS</div>
                                                <span>Jane Smith</span>
                                            </div>
                                        </td>
                                        <td><span class="gender-badge gender-female">Female</span></td>
                                        <td>456 Oak Ave, Somewhere</td>
                                        <td>555-987-6543</td>
                                        <td>jane.smith@example.com</td>
                                        <td>May 6, 2025</td>
                                        <td>
                                           
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="modal" data-bs-target="#editStudentModal">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="modal" data-bs-target="#deleteStudentModal">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="student-avatar me-2">RJ</div>
                                                <span>Robert Johnson</span>
                                            </div>
                                        </td>
                                        <td><span class="gender-badge gender-male">Male</span></td>
                                        <td>789 Pine Rd, Elsewhere</td>
                                        <td>555-456-7890</td>
                                        <td>robert.j@example.com</td>
                                        <td>May 5, 2025</td>
                                        <td>
                                           
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="modal" data-bs-target="#editStudentModal">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="modal" data-bs-target="#deleteStudentModal">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="student-avatar me-2">EW</div>
                                                <span>Emily Wilson</span>
                                            </div>
                                        </td>
                                        <td><span class="gender-badge gender-female">Female</span></td>
                                        <td>321 Elm St, Nowhere</td>
                                        <td>555-789-0123</td>
                                        <td>emily.w@example.com</td>
                                        <td>May 4, 2025</td>
                                        <td>
                                           
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="modal" data-bs-target="#editStudentModal">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="modal" data-bs-target="#deleteStudentModal">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="student-avatar me-2">AT</div>
                                                <span>Alex Taylor</span>
                                            </div>
                                        </td>
                                        <td><span class="gender-badge gender-other">Other</span></td>
                                        <td>654 Cedar Ln, Anywhere</td>
                                        <td>555-234-5678</td>
                                        <td>alex.t@example.com</td>
                                        <td>May 3, 2025</td>
                                        <td>
                                           
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="modal" data-bs-target="#editStudentModal">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="modal" data-bs-target="#deleteStudentModal">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>
            </div>



        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>