<?php 
   include "connect.php";
   ob_start();
?>
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
                                        <th>Profile</th>
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


                                    <?php

                                    

                                    $sql = "SELECT * FROM `students`";

                                    $result = mysqli_query($conn, $sql);

                                    if ($result) {
                                        $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                        //  echo "<pre>";

                                        //  print_r($students);

                                        //  echo "</pre>";
                                    } else {
                                        $students = [];
                                    }


                                    foreach ($students as $student) {
                                    ?>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td><?php echo $student['id'] ?></td>
                                            <td>
                                                <img width="100" height="130" src="images/<?php echo $student['image'] ?>" alt="">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span><?php echo $student['name'] ?></span>
                                                </div>
                                            </td>
                                            <td><span class="gender-badge gender-male"><?php echo $student['gender'] ?></span></td>
                                            <td><?php echo $student['address'] ?></td>
                                            <td><?php echo $student['phone'] ?></td>
                                            <td><?php echo $student['email'] ?></td>
                                            <td><?php echo $student['created_at'] ?></td>
                                            <td>

                                                <a href="edit.php?id=<?php echo $student['id'] ?>" class="btn btn-sm btn-outline-success action-btn">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a href="index.php?id=<?php echo $student['id'] ?>" onclick="return confirm('Do you want to this?')" class="btn btn-sm btn-outline-danger action-btn" >
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>

            </div>


            <?php 
                 if(isset($_GET['id'])){

                    $id = $_GET['id'];

                    $sql = "DELETE FROM students WHERE id = $id";

                    $result = mysqli_query($conn,$sql);

                    if($result){
                        header('Location: index.php');
                    }

                 }
            ?>



        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>