<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            text-align: center;
            background: url("images/backg1homepage.jpg") no-repeat center center fixed; 
            background-size: cover;
            color: #fff; /* Makes text readable over background */
        }

        header { 
            background: rgba(0, 123, 255, 0.9); 
            color: white; 
            padding: 15px; 
            font-size: 24px; 
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        header img {
            block-size: 50px; /* Adjust logo size */
            inline-size: auto;
        }

        nav { 
            background: rgba(244, 244, 244, 0.9); 
            padding: 10px;
        }

        nav a { 
            margin: 0 15px; 
            text-decoration: none; 
            color: #007bff; 
            font-weight: bold; 
            font-size: 18px; 
        }

        nav a:hover { 
            color: #0056b3; 
        }

        section { 
            margin: auto; 
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            padding: 30px;
            inline-size: 50%; /* Adjust width as needed */
            position: absolute;
            inset-block-start: 50%;
            inset-inline-start: 50%;
            transform: translate(-50%, -50%); /* Centers it perfectly */
        }


        footer { 
            background: rgba(0, 123, 255, 0.9); 
            color: white; 
            padding: 10px; 
            position: fixed; 
            inline-size: 100%; 
            inset-block-end: 0; 
            text-align: center;
        }

        section h2 { 
            font-size: 40px; 
            font-weight: bold; 
            font-family: "Times New Roman", Times, serif; 
            text-transform: uppercase; /* Optional */
        }

        section p { 
            font-size: 20px; 
            font-weight: bold;
            font-family: "Times New Roman", Times, serif; 
            line-height: 1.5; 
            font-style: italic;

        }

    </style>
</head>
<body>

<header>
    <img src="images/logo.png" alt="Logo.jpg">
    <h1>Student Management System</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="add_student.php">Add Students</a>
    <a href="edit_student.php">Edit Students</a>
    <a href="view_students.php">View Students</a>
</nav>

<section>
    <h2>Welcome to the Student Management System</h2>
    <p>The Student Management System (SMS) helps educational institutions manage student records, courses, and other academic information efficiently.<br>
                           Navigate through the system using the menu above to access student details, and more.</p>
</section>

<footer>&copy; <?php echo date("Y"); ?> Student Management System
</footer>

</body>
</html>

