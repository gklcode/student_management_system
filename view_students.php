<?php

include('db.php');

$count_query = "SELECT COUNT(*) AS total FROM students";
$count_result = mysqli_query($conn, $count_query);
$count_row = mysqli_fetch_assoc($count_result);

$total_students = $count_row['total'];

$search = "";

if(isset($_GET['search']))
    {
        $search = $_GET['search'];
        $query = "SELECT * FROM students WHERE name LIKE '%$search%'";
    }
    else{
        $query = "SELECT * FROM students";
    }
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Students</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
         rel="stylesheet">
    </head>
    <body class="container mt-5">

        <h2 class="text-primary mb-3">STUDENTS LIST</h2>

        <a href="index.php" class="btn btn-secondary mb-3">
            Home
        </a>

        <a href="add_student.php" class="btn btn-success mb-3">
            Add Student
        </a>
        
        <div class="card mb-3">
            <div class="card-body text-center">
                <h5>Total Students</h5>
                <h2><?php echo $total_students; ?></h2>
            </div>
        </div>

      <form method="GET" class="row g-2 mb-3">
        <div class="col-md-8">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Search Student Name"
                   value="<?php echo $search; ?>">
        </div>

        <div class="col-md-2">
            <button type="submit"
                    class="btn btn-primary w-100">
                Search 
            </button>
        </div>

        <div class="col-md-2">
            <a href="view_students.php"
               class="btn btn-secondary w-100">
               Clear 
            </a>
        </div>
      </form>

        <?php
        if(isset($_GET['msg']))
            {
                if($_GET['msg'] == 'added')
                    {
                        echo "<div class='alert alert-success'>Student Added Successfully!</div>";
                    }
                if($_GET['msg'] == 'updated')
                    {
                        echo "<div class='alert alert-warning'>Student Updated Successfully!</div>";
                    }
                if($_GET['msg'] == 'deleted')
                    {
                        echo "<div class='alert alert-danger'>Student Deleted Successfully!</div>";
                    }
            }
        ?>

        <table class="table table-bordered table-hover table-striped">
            
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td>
                <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="delete_student.php?id=<?php echo $row['id']; ?>"
                class="btn btn-danger btn-sm"
                    onclick="return confirm('Are you want to delete this student?')">
                    Delete
                </a>
            </td>
        </tr>

        <?php
            }
        ?>

        </table>

        <hr>
    <p class="text-center text-muted">
        Student Management System © 2026 | Built by Gokul
    </p>


    </body>
</html>