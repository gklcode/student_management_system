<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
    <div class="card shadow p-4 mx-auto" style="max-width:700px;">
    <h2 class="text-primary text-center mb-4 fw-bold">
        🎓STUDENT FORM
    </h2>
    
    <form action="save_student.php" method="POST">

        <label class="fw-semibold">Name:</label>
        <input type="text" name="name" class="form-control mb-3" placeholder="Enter name" required>

        <label class="fw-semibold">Email:</label>
        <input type="email" name="email" class="form-control mb-3" placeholder="Enter email"  required>

        <label class="fw-semibold">Phone:</label>
        <input type="text" name="phone" class="form-control mb-3" placeholder="Enter phone number">

        <label class="fw-semibold">Course:</label>
        <input type="text" name="course" class="form-control mb-3" placeholder="Enter course">

        <button type="submit" class="btn btn-primary w-100 mb-2">
            Save Student
        </button>

        <a href="index.php" class="btn btn-secondary w-100">
            Back to Home
        </a>

    </form>

</div>
    <hr>
    <p class="text-center text-muted">
        Student Management System © 2026 | Built by Gokul
    </p>
    
</div>
</body>
</html>