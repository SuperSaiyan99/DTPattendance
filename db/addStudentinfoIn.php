<?php

date_default_timezone_set('Asia/Manila');
include ('functions.php');

try{
  
  if (isset($_POST['schoolID'])){

    $sched_date = date("Y-m-d");
<<<<<<< HEAD
     $sched_tin = date('h:i:s a');
     $schoolID = $_POST['schoolID'];

     //clean up
       $firstName = $_POST['firstName'];
       $middleName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $exampleRadios = $_POST['exampleRadios'];
      $course = $_POST['course'];
      
=======
     $sched_tin = date('h:i:s a m/d/Y');
      $schoolID = $_POST['schoolID'];
       $firstName = $_POST['firstName'];
       $middleName = $_POST['middleName'];
      $lastName = $_POST['lastName'];
      $exampleRadios = $_POST['exampleRadios'];
      $course = $_POST['course'];
>>>>>>> parent of 6e7d280 (almost done)

    // nag push ko para sa admin kay na bungkag ang css sa server nimo :)

    if (empty($middleName)){
      $middleName = "N/A";
    }

    insertStudentInfo(
      $schoolID,
      $firstName,
      $lastName,
      $middleName,
      $course,
      $exampleRadios
    );

    insertScheduleTimeOut(
      $sched_date,
      $sched_tin,
      foreignkeyFinder($schoolID)
    );
}
}

catch (mysqli_sql_exception $e) {
    echo $e;

}
  
      //query for selecting foreign key
    //SELECT info_id from dtp_info WHERE info_sid = $schoolID



?>