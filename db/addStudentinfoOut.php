<?php

date_default_timezone_set('Asia/Manila');
include ('functions.php');

try{
  
  if (isset($_POST['schoolID'])){
    $sched_date = date("Y-m-d");
     $sched_tin = date('h:i:s a');
     $schoolID = clean($_POST['schoolID']);

     //clean up
       $firstName = clean($_POST['firstName']);
       $middleName = clean($_POST['middleName']);
      $lastName = clean($_POST['lastName']);
      $exampleRadios = clean($_POST['exampleRadios']);
      $course = clean($_POST['course']);
      

    // nag push ko para sa admin kay na bungkag ang css sa server nimo :)

    if (empty($middleName)){
      $middleName = "N/A";
    }

    if (date('a') === "pm"){
      $sched_entry = 'afternoon';
  }else{
       $sched_entry = 'morning';
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
      $sched_entry , 
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