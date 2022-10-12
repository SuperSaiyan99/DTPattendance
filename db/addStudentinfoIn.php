<?php

date_default_timezone_set('Asia/Manila');
include ('functions.php');

try{
  

  if (isset($_POST['schoolID'])){

        echo  $sched_date = date("Y-m-d");
        echo   $sched_tin = date('h:i:s a');
        echo    $schoolID = $_POST['schoolID'];
        echo     $firstName = $_POST['firstName'];
        echo     $middleName = $_POST['middleName'];
        echo     $lastName = $_POST['lastName'];
        echo     $exampleRadios = $_POST['exampleRadios'];
        echo    $course = $_POST['course'];
            echo     $entry = "In";
      

    // nag push ko para sa admin kay na bungkag ang css sa server nimo :)

    if (empty($middleName)){
      $middleName = "N/A";
    }

    if (date('a') === "pm"){
      $sched_type ="afternoon";
    }else{
      $sched_type ="morning";
    }

    insertScheduleTimeIn(
      $sched_date,
      $sched_tin,
      $entry,
      foreignkeyFinder($schoolID),
      $sched_type
    );

    insertStudentInfo(
      $schoolID,
      $firstName,
      $lastName,
      $middleName,
      $course,
      $exampleRadios
    );
}
}

catch (mysqli_sql_exception $e) {
    echo $e;

}
  
      //query for selecting foreign key
    //SELECT info_id from dtp_info WHERE info_sid = $schoolID



?>