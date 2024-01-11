<?php
include 'config.php';

$rollNumber = $_POST['roll_number'];

$sql = "SELECT id FROM students WHERE roll_number = '$rollNumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $studentId = $result->fetch_assoc()['id'];

    $date = date("Y-m-d");
    $sql = "INSERT INTO attendance (student_id, attendance_date, status) VALUES ('$studentId', '$date', 'present')";

    if ($conn->query($sql) === TRUE) {
        echo "Attendance marked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Student not found";
}

$conn->close();
?>
