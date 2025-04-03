<?php
include 'dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch existing student data
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    // Update query
    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student updated successfully!'); window.location.href='students_list.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php include 'navbar.php'; ?>

    <h2>Edit Student</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $student['name']; ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $student['email']; ?>" required><br>

        <label>Phone:</label>
        <input type="number" name="phone" value="<?php echo $student['phone']; ?>" required><br>

        <label>Course:</label>
        <input type="text" name="course" value="<?php echo $student['course']; ?>" required><br>

        <button type="submit" name="update">Update Student</button>
    </form>
</body>
</html>