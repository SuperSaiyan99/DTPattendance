<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DTP | Attendance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="css/afternoon.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
  </head>
  <body>

    <nav>
      <div class="container">
        <h1>DTP Attendance Form | Afternoon In</h1>
      </div>
    </nav>

    <img src="img/dtp_owl.png">
    
<form method="POST" action="db/addStudentinfoIn.php">
  <div class="form">
    <input type="text" placeholder="School ID" id="IDschool" name="schoolID" maxlength = "5"  required/>
      <input type="text" placeholder="First Name" id="IDfirstName" name="firstName" maxlength="35"  required/>
      <input type="text" placeholder="Middle Name" id="IDmiddleName" name="middleName" maxlength="35" />
      <input type="text" placeholder="Last Name" id="IDlastName" name="lastName"  maxlength="35" required/>
  </div>
<!------------ YEAR LEVEL------------->
<div class="form-check">
  <p class="h3">Year Level</p>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
    1st Year
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="2" >
  <label class="form-check-label" for="exampleRadios1">
    2nd Year
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="3" >
  <label class="form-check-label" for="exampleRadios1">
    3rd Year
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="4" >
  <label class="form-check-label" for="exampleRadios1">
    4th Year
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="5" >
  <label class="form-check-label" for="exampleRadios1">
    5th Year
  </label>
</div>
<!------------ FOR DEPARTMENT TYPE------------->
<div class="form-check">
  <p class="h3">Course</p>
  <input class="form-check-input" type="radio" name="course" id="exampleRadios1" value="IT" checked>
  <label class="form-check-label" for="exampleRadios1">
    Information Technology
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="course" id="exampleRadios1" value="CPE" >
  <label class="form-check-label" for="exampleRadios1">
  Computer Engineering
  </label>
</div>
      <button type="submit" id="submit" value="post" class="btn btn-primary btn-lg" onclick="foo()">Submit</button>
    </div>
</form> 



<script>
  function foo() {
     var IDschool= document.getElementById('IDschool').value;
     var IDfirstName= document.getElementById('IDfirstName').value;
     var IDmiddleName= document.getElementById('IDmiddleName').value;
     var IDlastName= document.getElementById('IDlastName').value;

     if (IDschool === "" || IDfirstName === "" || IDlastName === ""){
          alert("Please don't leave the boxes empty.");
     }
 }
</script>





  </body>
</html>
