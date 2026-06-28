<?php

include('db.php');

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$query = "UPDATE students
SET
name='$name',
email='$email',
phone='$phone',
course='$course'
WHERE id='$id'";

$result = mysqli_query($conn, $query);

if($result){
    header("location: view_students.php?msg=updated");
    exit();
}
else{
    echo "Update Failed";
}

?>