<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'Student.php';
require 'Group.php';

// Create students
$studentsGroup1 = [
    new Student('Alice', 90),
    new Student('Bob', 85),
    new Student('3', 90),
    new Student('4', 90),
    new Student('5', 90),
    new Student('6', 90),
    new Student('7', 90),
    new Student('8', 90),
    new Student('9', 90),
    new Student('10', 90),

];

$studentsGroup2 = [
    new Student('Charlie', 75),
    new Student('David', 80),
    new Student('3x', 90),
    new Student('4x', 90),
    new Student('5x', 90),
    new Student('6x', 90),
    new Student('7x', 90),
    new Student('8x', 90),
    new Student('9x', 90),
    new Student('10x', 90),
];

// Create groups
$group1 = new Group($studentsGroup1);
$group2 = new Group($studentsGroup2);

// Print names and grades of students in Group 1
echo "<h3>Group 1 Students:</h3><br>";
foreach ($studentsGroup1 as $student) {
    echo $student->getName() . ": " . $student->getGrade() . "<br>";
}
echo "<br>";

// Print names and grades of students in Group 2
echo "<h3>Group 2 Students:</h3><br>";
foreach ($studentsGroup2 as $student) {
    echo $student->getName() . ": " . $student->getGrade() . "<br>";
}
echo "<br>";


// Calculate and display average scores for both groups
echo "<strong>Group 1 Average Score:</strong> " . $group1->calculateAverage() . "<br>";
echo "<strong>Group 2 Average Score:</strong> " . $group2->calculateAverage() . "<br>";

// Move a student from Group 1 to Group 2
$studentToMove = $studentsGroup1[0];
$group1->moveStudent($studentToMove, $group2);


// Print names and grades of students in updated Group 1
echo "<h3>Updated Group 1 Students:</h3><br>";
foreach ($group1->getStudents() as $student) {
    echo $student->getName() . ": " . $student->getGrade() . "<br>";
}
echo "<br>";

// Print names and grades of students in updated Group 2
echo "<h3>Updated Group 2 Students:</h3><br>";
foreach ($group2->getStudents() as $student) {
    echo $student->getName() . ": " . $student->getGrade() . "<br>";
}
echo "<br>";
// Recalculate and display average scores after the move
echo "<strong>Group 1 Average Score after:</strong> " . $group1->calculateAverage() . "<br>";
echo "<strong>Group 2 Average Score after:</strong> " . $group2->calculateAverage() . "<br>";
echo "<br>";
