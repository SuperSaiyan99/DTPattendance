<?php

date_default_timezone_set('Asia/Manila');
include ('functions.php');



try{
  

  if (isset($_POST['schoolID'])){

          $sched_date = date("Y-m-d");
           $sched_tin = date('h:i:s a');
            $schoolID = $_POST['schoolID'];
             $firstName = $_POST['firstName'];
             $middleName = $_POST['middleName'];
             $lastName = $_POST['lastName'];
               $exampleRadios = $_POST['exampleRadios'];
                  $course = $_POST['course'];
                    $entry = "In";
      

    // nag push ko para sa admin kay na bungkag ang css sa server nimo :)

    if (empty($middleName)){
      $middleName = "N/A";
    }

    if (date('a') === "pm"){
      $sched_type ="afternoon";
    }else{
      $sched_type ="morning";
    }

    // $sched_type ="morning";

// $sched_type ="morning";

    insertStudentInfo(
      $schoolID,
      $firstName,
      $lastName,
      $middleName,
      $course,
      $exampleRadios
    );

    insertScheduleTimeIn(
      $sched_date,
      $sched_tin,
      $entry,
      foreignkeyFinder($schoolID),
      $sched_type
    );
}
}

catch (mysqli_sql_exception $e) {
    echo $e;

}
  
      //query for selecting foreign key
    //SELECT info_id from dtp_info WHERE info_sid = $schoolID



?>