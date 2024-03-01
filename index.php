<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grading System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="GET">
    <input type="number" name="score" placeholder="Write Your Score!"><br>
    <button type="submit" name="submit" value="submit">send</button><br>
</form>


<?php
if (isset($_GET['submit'])) {
    // Validate input
    $score = filter_var($_GET['score'], FILTER_VALIDATE_INT);

    if ($score !== false && $score !== null) {
        $grade = getGrade($score);
        echo "Your grade is: $grade";
    } else {
        echo "Invalid score input. Please enter a valid number.";
    }
}

function getGrade($score) {
    if ($score >= 90 && $score <= 100) {
        return "A";
    } elseif ($score >= 80 && $score <= 89) {
        return "B";
    } elseif ($score >= 70 && $score <= 79) {
        return "C";
    } elseif ($score >= 60 && $score <= 69) {
        return "D";
    } elseif ($score >= 50 && $score <= 59) {
        return "E";
    } elseif ($score < 50 && $score >= 0) {
        return "F";
    } else {
        return "Unavailable! Please enter a valid score!";
    }
}
?>

