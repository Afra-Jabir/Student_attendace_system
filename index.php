<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Attendance System</title>
</head>
<body>
    <h1>Student Attendance System</h1>

    <h2>Student Registration</h2>
    <form action="register.php" method="post">
        Name: <input type="text" name="name" required>
        Roll Number: <input type="text" name="roll_number" required>
        <input type="submit" value="Register">
    </form>

    <h2>Mark Attendance</h2>
    <form action="mark_attendance.php" method="post">
        Roll Number: <input type="text" name="roll_number" required>
        <input type="submit" value="Mark Attendance">
    </form>

    <h2>View Attendance</h2>
    <a href="view_attendance.php">View Attendance Records</a>
</body>
</html>
