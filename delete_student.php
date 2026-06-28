<?php
include('db.php');

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id = $id";

$result = mysqli_query($conn, $query);
if($result){
    header("Location: view_students.php?msg=deleted");
    exit();
}else{
    echo "Delete Failed";
}
?>