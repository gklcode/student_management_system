<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-primary">STUDENT FORM</h1>
    <form action="save_student.php" method="POST" class="w-50">

        <label>Name:</label><br>
        <input type="text" name="name" class="form-control" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" class="form-control" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" class="form-control"><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" class="form-control"><br><br>

        <button type="submit" class="btn btn-primary">
            Save Students
        </button>

        <br><br>

        <a href="index.php" class="btn btn-secondary">
            Back to Home
        </a>

    </form>

    <hr>
    <p class="text-center text-muted">
        Student Management System © 2026 | Built by Gokul
    </p>
    
</body>
</html>