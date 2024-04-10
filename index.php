<?php
require_once "./classes/Student.php";
$student1=new Student("Aung Gyi","male","1990");
print_r($student1);
echo $student1->showFullName();
echo $student1->introduction();

