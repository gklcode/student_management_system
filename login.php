<?php
session_start();
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 px-3">
    <div class="card shadow p-4 mx-auto w-100" style="max-width: 450px;">
        <h2 class="text-center text-primary">
            Admin Login
        </h2>
        <hr>

        <?php
        if(isset($_POST['username']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM admins 
                        WHERE username='$username'
                        AND password='$password'";

                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0)
                    {
                        $_SESSION['admin'] = $username;
                       header("Location: index.php");
                       exit();
                    }
                    else
                    {
                        echo "Invalid Username or Password";
                    }
            }
           
        ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">
                    Username
                </label>

                <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Enter Username">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Password
                </label>

                <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Enter Password">
            </div>

            <button
            type="submit"
            class="btn btn-primary w-100">
            Login
           </button>
        </form>
    </div>
</div>
    
</body>
</html>