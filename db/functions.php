<?php

    include ('connect.php');
    

    function insert($info_sid, $info_fname, $info_lname, $info_mname, $info_course, $info_yr_lvl,){
        global $conn;

        $sql = "INSERT INTO `dtp_info`(`info_sid`, `info_fname`, `info_lname`, `info_mname`, `info_course`, `info_yr_lvl`) VALUES ('$info_sid','$info_fname','$info_fname','$info_fname','$info_fname','$info_fname')";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

    }

    echo insert(54217, 'venz fredrick', 'venz fredrick', 'venz fredrick', 'IT', '1st year');



?>