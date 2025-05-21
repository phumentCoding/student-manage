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

            <?php
                if(isset($_GET['id'])){

                    try{
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM students WHERE id = $id";

                        $result = mysqli_query($conn,$sql);

                        $student = mysqli_fetch_assoc($result);


                        // echo "<pre>";
                        // print_r($student);
                        // echo "</pre>";

                    }catch(Exception $e){
                        echo "Error ". $e->getMessage();

                        $student = [];
                    }

                }else{
                    header('Location: index.php');
                }
            ?>


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
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" id="fullName" value="<?php echo $student['name'] ?>" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select" required>
                                        <option selected disabled>Select gender</option>
                                        <option value="Male"   <?php echo $student['gender'] === 'Male'   ? 'selected' : '' ?> >Male</option>
                                        <option value="Female" <?php echo $student['gender'] === 'Female' ? 'selected' : '' ?>>Female</option>
                                        <option value="Other"  <?php echo $student['gender'] === 'Other'  ? 'selected' : '' ?>>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" id="address" value="<?php echo $student['address'] ?>" name="address" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" id="phone" name="phone" value="<?php echo $student['phone'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" value="<?php echo $student['email'] ?>" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="image" class="form-label">Profile</label>
                                    <input type="file" id="image" name="image" class="form-control">

                                    <img class=" mt-3" width="100" height="120" src="images/<?php echo $student['image'] ?>" alt="">
                                </div>
                                
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-2"></i>Update Student
                                </button>
                            </div>
                        </form>


                        <?php 
                           if($_SERVER['REQUEST_METHOD'] === 'POST'){
                               try{
                                  $name = $_POST['name'];
                                  $gender = $_POST['gender'];
                                  $address = $_POST['address'];
                                  $phone   = $_POST['phone'];
                                  $email   = $_POST['email'];

                                  //check if upload new image
                                  if( isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK ){

                                    //get image name from folder => phnom_penh.jpg
                                    $file = $_FILES['image']['name'];
                                    //get location(folder) of image 
                                    $location = $_FILES['image']['tmp_name'];
                                    //create random image name for image
                                    $image = rand(000000,9999999) .'.'. pathinfo($file,PATHINFO_EXTENSION);

                                    move_uploaded_file($location,"images/$image");

                                  }

                                  //if not upload new image
                                  else{

                                    // No new image uploaded, keep the old one
                                    $image = $student['image'];
                                    
                                  }

                                  $sql = "UPDATE `students` SET `name`='$name',`gender`='$gender',`address`='$address',`phone`='$phone',`email`='$email',`image`='$image' WHERE `id` = $id ";

                                  $result = mysqli_query($conn,$sql);

                                  if($result){
                                     header('location:index.php');
                                  }

                            
                               }catch(Exception $e){
                                 die('Error'. $e->getMessage());
                               }
                           }
                        ?>
                    </div>
                </div>


            </div>



        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>