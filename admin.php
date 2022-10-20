<?php
  include 'db/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard | Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>

    <nav>
      <div class="container">
        <img src="img/dtp_owl.png">
        <h1 class="dtp">DTP Attendance Form</h1>
        <input type="button" value="Logout" id="logout" onclick="validate()">
      </div>
    </nav>

    <!-- MORNING TIME IN -->
    <h1 class="morning"> 
<form action="/action_page.php">
  <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
</form>
      <td>Total</td>
      <td>4/5</td>
    </h1>
    <div class="morning-table">
      <table>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Year Level</th>
          <th>Ontime</th>
          <th>Course</th>
        </tr>
        <tr>
          <td id="studentID">12345</td>
          <td id="studentName">Spiderman</td>
          <td id="yearLevel">First Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">53431</td>
          <td id="studentName">Ironman</td>
          <td id="yearLevel">Second Year</td>
          <td id="ontime">false</td>
          <td id="course">CPE</td>
        </tr>
        <tr>
          <td id="studentID">98765</td>
          <td id="studentName">Antman</td>
          <td id="yearLevel">Third Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">34613</td>
          <td id="studentName">Hulk</td>
          <td id="yearLevel">Fourth Year</td>
          <td id="ontime">true</td>
          <td id="course">CPE</td>
        </tr>
      </table>
    </div>

    <!-- MORNING TIME OUT -->
    <h1 class="morning">Morning Time Out MM/DD/YYYY
      <td>Total</td>
      <td>4/5</td>
    </h1>
    <div class="morning-table">
      <table>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Year Level</th>
          <th>Ontime</th>
          <th>Course</th>
        </tr>
        <tr>
          <td id="studentID">12345</td>
          <td id="studentName">Spiderman</td>
          <td id="yearLevel">First Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">53431</td>
          <td id="studentName">Ironman</td>
          <td id="yearLevel">Second Year</td>
          <td id="ontime">false</td>
          <td id="course">CPE</td>
        </tr>
        <tr>
          <td id="studentID">98765</td>
          <td id="studentName">Antman</td>
          <td id="yearLevel">Third Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">34613</td>
          <td id="studentName">Hulk</td>
          <td id="yearLevel">Fourth Year</td>
          <td id="ontime">true</td>
          <td id="course">CPE</td>
        </tr>
      </table>
    </div>

    <!-- AFTERNOON TIME IN -->
    <h1 class="morning">Afternoon Time In MM/DD/YYYY
      <td>Total</td>
      <td>4/5</td>
    </h1>
    <div class="morning-table">
      <table>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Year Level</th>
          <th>Ontime</th>
          <th>Course</th>
        </tr>
        <tr>
          <td id="studentID">12345</td>
          <td id="studentName">Spiderman</td>
          <td id="yearLevel">First Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">53431</td>
          <td id="studentName">Ironman</td>
          <td id="yearLevel">Second Year</td>
          <td id="ontime">false</td>
          <td id="course">CPE</td>
        </tr>
        <tr>
          <td id="studentID">98765</td>
          <td id="studentName">Antman</td>
          <td id="yearLevel">Third Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">34613</td>
          <td id="studentName">Hulk</td>
          <td id="yearLevel">Fourth Year</td>
          <td id="ontime">true</td>
          <td id="course">CPE</td>
        </tr>
      </table>
    </div>

    <!-- AFTERNOON TIME OUT -->
    <h1 class="morning">Afternoon Time Out MM/DD/YYYY
      <td>Total</td>
      <td>4/5</td>
    </h1>
    <div class="morning-table">
      <table>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Year Level</th>
          <th>Ontime</th>
          <th>Course</th>
        </tr>
        <tr>
          <td id="studentID">12345</td>
          <td id="studentName">Spiderman</td>
          <td id="yearLevel">First Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">53431</td>
          <td id="studentName">Ironman</td>
          <td id="yearLevel">Second Year</td>
          <td id="ontime">false</td>
          <td id="course">CPE</td>
        </tr>
        <tr>
          <td id="studentID">98765</td>
          <td id="studentName">Antman</td>
          <td id="yearLevel">Third Year</td>
          <td id="ontime">true</td>
          <td id="course">IT</td>
        </tr>
        <tr>
          <td id="studentID">34613</td>
          <td id="studentName">Hulk</td>
          <td id="yearLevel">Fourth Year</td>
          <td id="ontime">true</td>
          <td id="course">CPE</td>
        </tr>
      </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <script src="js/logout.js"></script>
  </body>
</html>
