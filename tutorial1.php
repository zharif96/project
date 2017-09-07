<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tutorial 1</title>
  </head>
  <body>
    <?php
    define("NAME","MUHAMMAD ZHARIF BIN AMIN ");
    define("ID","B02150014");
    define("PROGRAMME","BSE");

    $tutorial = 8;
    $quiz = 3;
    $test2 = 18;
    $midTermExam = 13;
    $assigment = 8;
    $groupAssignment = 8;
    $totalMarks = $tutorial + $quiz + $test2 + $midTermExam + $assigment + $groupAssignment;

    echo "Name: " .NAME;
    echo "<br>ID: " .ID;
    echo "<br>Programme: " .PROGRAMME;
    echo "<br><br>Marks:" ;
    echo "<br>Tutorial: " .$tutorial;
    echo "<br>Quiz: " .$quiz;
    echo "<br>Test 2: " .$test2;
    echo "<br>Mid Term Exam: " .$midTermExam;
    echo "<br>Assignment: " .$assigment;
    echo "<br>Group Assignment: " .$groupAssignment;
    echo "<br><br>Total    : " .$totalMarks ."/70";
    echo "FuckOFF";
    ?>
  </body>
</html>
