<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DTP | Attendance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="css/morning.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/jquery.js"></script>
  </head>
  <body>

    <nav>
      <div class="container">
        <h1>DTP Attendance Form | Morning Out</h1>
      </div>
    </nav>

    <img src="img/dtp_owl.png">
    
<form method="POST" action="">
  <div class="form">
    <input type="text" placeholder="School ID" id="IDschool" name="schoolID" maxlength = "5"  required/>
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

     if (IDschool === "" || IDfirstName === "" || IDlastName === "" || IDschool.length() < 5){
          alert("Please don't leave the boxes empty.");
     }else{
      alert("kaon");
     }
 }
</script>





  </body>
</html>
