<?php

    include ('connect.php');
    
    //for insert student Info
    function insertStudentInfo($info_sid, $info_fname, $info_lname, $info_mname, $info_course, $info_yr_lvl,){
        global $conn;

        $sql = "INSERT INTO `dtp_info`(`info_sid`, `info_fname`, `info_lname`, `info_mname`, `info_course`, `info_yr_lvl`) VALUES ('$info_sid','$info_fname','$info_lname','$info_mname','$info_course','$info_yr_lvl')";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    }

    function insertScheduleTimeIn($sched_date, $sched_tin, $info_id){
      global $conn;

      $sql = "INSERT INTO `dtp_sched`(`sched_date`, `sched_tin`, `info_id`) VALUES ('$sched_date','$sched_tin','$info_id')";
      
      if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

  function insertScheduleTimeOut($sched_date, $sched_tin, $info_id){
    global $conn;

    $sql = "INSERT INTO `dtp_info`(`sched_date`, `sched_tout`, `info_id`) VALUES ('$sched_date','$sched_tin','$info_id')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  }

  function foreignkeyFinder($foreignKey){
    global $conn;

    $sql = "SELECT info_id from dtp_info WHERE info_sid = $foreignKey";
    
    
    if ($result = mysqli_query($conn, $sql)) {
        while($row = mysqli_fetch_array($result)) {
             return $row['info_id']; 
        }
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

  }

  

  

  


?>