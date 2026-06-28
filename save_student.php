<?php

include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$query = "INSERT INTO students(name,email,phone,course)
VALUES('$name','$email','$phone','$course')";

$result = mysqli_query($conn,$query);

if($result)
    {
        header("Location: view_students.php?msg=added");
        exit(); 
    }
    else{
        echo "Failed";
    }
?>