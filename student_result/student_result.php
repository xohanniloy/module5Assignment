<?php

function calculateResult($marks) {

    foreach($marks as $subject => $mark) {
        if($mark < 0 || $mark > 100) {
            echo "Invalid marks, Please enter marks between 0 and 100.";
            return;
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "The student has failed.";
            return;
        }
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    $grade = '';
    switch(true){
        case $averageMarks >= 80:
            $grade = 'A+';
            break;
        case $averageMarks >= 70:
            $grade = 'A';
            break;
        case $averageMarks >= 60:
            $grade = 'A-';
            break;
        case $averageMarks >= 50:
            $grade = 'B';
            break;
        case $averageMarks >= 40:
            $grade = 'C';
            break;
        case $averageMarks >= 33:
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }

    echo "Total Marks: $totalMarks </br>";
    echo "Average Marks: " . number_format($averageMarks, 2) . "</br>";
    echo "Grade: $grade";

}

$studentMarks = [
    "Math" => 99,
    "English" => 99,
    "Physics" => 99,
    "Chemistry" => 99,
    "Biology" => 99
];

calculateResult($studentMarks);