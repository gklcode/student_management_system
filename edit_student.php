<?php
include('db.php');
$id = $_GET['id'];
$query = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Edit Students</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="container mt-5">
        <div class="card shadow p-4">
        <h2 class="text-primary text-center">EDIT STUDENTS</h2>
        <hr>

        <form action="update_student.php" method="POST">
            <input type="hidden" name="id"
            value="<?php echo $row['id']; ?>">
            
         <div class="mb-3">
            <label class="form-label">
                Name
            </label>
            <input type="text" name="name"
            value="<?php echo $row['name']; ?>"
            class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">
                 Email
            </label>
            <input type="email" name="email"
            value="<?php echo $row['email']; ?>"
            class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">
                Phone
            </label>
            <input type="text" name="phone"
            value="<?php echo $row['phone']; ?>"
            class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">
            Course
            </label>
            <input type="text" name="course"
            value="<?php echo $row['course']; ?>"
            class="form-control">
        </div>

            <button 
                type="submit"
                class="btn btn-primary">
                Update Student
            </button>

                <br><br>

                <a href="view_students.php" 
                   class="btn btn-secondary ms-2">
                    Back
                </a>


        </form>
    </div>

        <hr>
    <p class="text-center text-muted">
        Student Management System © 2026 | Built by Gokul
    </p>
    </body>
</html>