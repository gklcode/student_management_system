<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_management_system",
);

if (!$conn) {
    die("connection failed");
}
?>