<?php

function StudentInformation($name, $courseCode, $quizScores, $examScores) {
    $studentInfo = array(
        "Name" => $name,
        "CourseCode" => $courseCode,
        "QuizScores" => $quizScores,
        "ExamScores" => $examScores
    );

    return $studentInfo;
}

$studentData = storeStudentInfo($name, $courseCode, $quizScores, $examScores);

$name = "Sir vince";
$courseCode = "CICS";
$quizScores = array(20, 20, 20, 20, 20);
$examScores = array(50, 50, 50);

echo "Student Information:<br>";
echo "Name: " . $studentData['Name'] . "<br>";
echo "Course Code: " . $studentData['CourseCode'] . "<br>";
echo "Quiz Scores: " . implode(", ", $studentData['QuizScores']) . "<br>";
echo "Exam Scores: " . implode(", ", $studentData['ExamScores']) . "<br>";



function QuizScores($quizScores)
{

$totalScore = array_sum($quizScores);
//total quiz score , 5 quizzes is 50 points in total

$averageScore = $totalScore / 5;

return $averageScore;

}



function ExamScores($examScores)
{
    $totalScore = array_sum($examScores)
    // the total exam score is perfect, 3 exams total 150 points

    $averageExamScore = $totalScore / 3;

    return $averageExamScore;

}



function calculateFinalGrade($quizWeight, $examWeight) 
{
    
    $weightedQuizScore = 10 * (40 / 100);
    $weightedExamScore = 50 * (60 / 100);

    // Calculate final grade
    $finalGrade = $weightedQuizScore + $weightedExamScore;

    return $finalGrade;
}




echo "Student Information:<br>";
echo "Name: " . $studentData['Name'] . "<br>";
echo "Course Code: " . $studentData['CourseCode'] . "<br>";
echo "Final Grade: " . $finalGrade;













?>
