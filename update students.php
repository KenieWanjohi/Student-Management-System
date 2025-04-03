<?php
include 'dbcon.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student updated successfully!'); window.location.href='view_students.php';</script>";
    } else {
        echo "Error updating student: " . $conn->error;
    }
}
?>
