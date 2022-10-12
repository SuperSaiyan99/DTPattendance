<?php

date_default_timezone_set('Asia/Manila');
include ('functions.php');

  if (isset($_POST['schoolID'])){
      $sched_date = date("Y-m-d");
      echo $sched_tin = date('h:i:s a m/d/Y');
        $schoolID = $_POST['schoolID'];
         $firstName = $_POST['firstName'];
         $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $exampleRadios = $_POST['exampleRadios'];
        $course = $_POST['course'];

      // nag push ko para sa admin kay na bungkag ang css sa server nimo :)

      if (empty($middleName)){
        $middleName = "N/A";
      }

      insertStudentInfo(
        $schoolID,
        $firstName,
        $lastName,
        $middleName,
        $exampleRadios,
        $course
      );

      insertScheduleTimeIn(
        $sched_date,
        $sched_tin,
        foreignkeyFinder($schoolID)
      );
  }


     

      //query for selecting foreign key
    //SELECT info_id from dtp_info WHERE info_sid = $schoolID



?>