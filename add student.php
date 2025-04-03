<?php
session_start();
$host="localhost";
$username="root";
$password="";
$database="student_db";

$conn=new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("database connection failed:".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
       * {
    box-sizing: border-box;
}

       body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #f8f9fa;
            padding: 10px 0;
            margin-bottom: 20px;

        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul {
    display: flex;
    gap: 10px;
}

        
        nav ul li a {
            text-decoration: none;
            color: #007bff;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}

        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="add student.php">Add Student</a></li>
                <li><a href="edit student.php">Edit Student</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="view students.php">View Students</a></li>
            </ul>
        </nav>
    </header>
    <h2>Add Student</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" required>
        <label for="address">Course:</label>
        <input type="text" id="course" name="course" required>
        <input type="submit" value="Add Student">
    </form>
</body>
</html>