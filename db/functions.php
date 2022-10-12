<?php

    include ('connect.php');
    
    //for insert student Info
    function insertStudentInfo($info_sid, $info_fname, $info_lname, $info_mname, $info_course, $info_yr_lvl,){
        global $conn;

        $sql = "INSERT INTO `dtp_info`(`info_sid`, `info_fname`, `info_lname`, `info_mname`, `info_course`, `info_yr_lvl`) VALUES ('$info_sid','$info_fname','$info_lname','$info_mname','$info_course','$info_yr_lvl')";
        
        
        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('Succesfully Registered')</script>";
          }else if ($conn -> errno == 1062){
            echo "<script>alert('Attendance has been checked!')</script>";
            header("Location: http://".$_SERVER['HTTP_HOST']."/DTPattendance/");
          } 
          else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    }

    function insertScheduleTimeIn($sched_date, $sched_tin, $info_sid){
      global $conn;

      $sql = "INSERT INTO `dtp_sched`(`sched_date`, `sched_tin`, `info_sid`) VALUES ('$sched_date','$sched_tin','$info_sid')";
      
      
      if (mysqli_query($conn, $sql)) {
          echo "<script>alert('Succesfully Registered')</script>";
        } else {
          echo("Errorcode: " . $conn -> errno);
        }
    }

  function insertScheduleTimeOut($sched_date, $sched_tin, $info_sid){
    global $conn;

    $sql = "INSERT INTO `dtp_info`(`sched_date`, `sched_tout`, `info_id`) VALUES ('$sched_date','$sched_tin','$info_sid')";
    
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Succesfully Registered')</script>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  }

  function foreignkeyFinder($foreignKey){
    global $conn;

    $sql = "SELECT info_sid  from dtp_info WHERE info_sid  = $foreignKey";
    
    if ($result = mysqli_query($conn, $sql)) {
        while($row = mysqli_fetch_array($result)) {
             return $row['info_sid']; 
        }
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

  }




  

  


?>