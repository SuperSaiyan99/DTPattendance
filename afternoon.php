<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DTP | Attendance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="css/morning.css" rel="stylesheet">
    <script src="./js/jquery.js"></script>
  </head>
  <body>

    <nav>
      <div class="container">
        <h1>DTP Attendance Form | Afternoon</h1>
      </div>
    </nav>

    <img src="img/dtp_owl.png">
    
    <div class="form">
    <input type="text" placeholder="School ID" id="schoolID" maxlength = "6" pattern="[0-9]" required/>
      <input type="text" placeholder="First Name" id="firstName" maxlength="35" pattern="[a-zA-Z]" required/>
      <input type="text" placeholder="Middle Name" id="middleName" maxlength="35" pattern="[a-zA-Z]" required/>
      <input type="text" placeholder="Last Name" id="lastName"  maxlength="35" pattern="[a-zA-Z]" required/>

      <input type="radio" id="first-yr" checked/> First Year <br>
      <input type="radio" id="second-yr" /> Second Year <br>
      <input type="radio" id="third-yr" /> Third Year <br>
      <input type="radio" id="fourth-yr" /> Fourth Year <br>
      <input type="radio" id="fourth-yr" /> Fifth Year <br>

      <button type="submit" onclick="foo()">Submit</button>
    </div>

  
<script>
  function foo() {
      $.ajax({
        url:"db/addStudentinfo.php", //the page containing php script
        type: "POST", //request type
        success:function(result){
         alert(result);
       }
     });
 }
</script>

  </body>
</html>
