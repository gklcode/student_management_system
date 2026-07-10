<?php
include('db.php');

$count_query = "SELECT COUNT(*) AS total FROM students";
$count_result = mysqli_query($conn, $count_query);
$count_row = mysqli_fetch_assoc($count_result);

$total_students = $count_row['total'];
?>

<?php
session_start();
if(!isset($_SESSION['admin']))
    {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Management System</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>

    <body class="bg-light">
    <div class="container-fluid py-3 px-3">

    <div class="text-end mb-3">
            <a href="logout.php" class="btn btn-danger">
                logout
            </a>
     </div>

        <h1 class="text-primary text-center fw-bold display-6">
            STUDENT MANAGEMENT SYSTEM
        </h1>

        <p class="text-center">
            A PHP & MySQL CRUD Application built by Gokul.
        </p>

    <div class="card mb-3 border-primary shadow-sm">
        <div class="card-body text-center">
            <h5>Total Students</h5>
            <h1 class="text-primary">
                <?php echo $total_students; ?>
            
            </h1>
        </div>
     </div>

        <hr>

        <div class="row text-center mt-4">
            <div class="col-12 col-md-4 mb-4">
                <h4>➕<h4>
                <p>Add Students</p>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <h4>🔍</h4>
                <p>Search Students</p>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <h4>✏️</h4>
                <p>Manage Records</p>
            </div>

        </div>

         <div  class="row mt-4">
            
           <div class="col-12 col-md-6 mb-2">
            <a href="add_student.php"
            class="btn btn-success w-100">
            Add Student
            </a>
           </div>

           <div class="col-12 col-md-6 mb-2">
            <a href="view_students.php"
              class="btn btn-primary w-100">
              View Students
            </a>
          </div>
         </div>
   </div>



        </div>

        <hr>
        <p class="text-center text-muted">
            Student Management System © 2026 | Built by Gokul
        </p>

    
    </body>
</html>