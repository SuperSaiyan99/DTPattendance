<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DTP | Attendance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="css/morning.css" rel="stylesheet">
  </head>
  <body>

    <nav>
      <div class="container">
        <h1>DTP Attendance Form | Morning</h1>
      </div>s
    </nav>

    <img src="img/dtp_owl.png">
    
    <div class="form">
    <input type="text" placeholder="School ID" id="schoolID" maxlength = "6" pattern="[0-9]"/>
      <input type="text" placeholder="First Name" id="firstName" maxlength="6" pattern="[0-9]"/>
      <input type="text" placeholder="Middle Name" id="middleName" maxlength="6" pattern="[0-9]"/>
      <input type="text" placeholder="Last Name" id="lastName"  maxlength="6" pattern="[0-9]"/>

      <input type="radio" id="first-yr" /> First Year <br>
      <input type="radio" id="second-yr" /> Second Year <br>
      <input type="radio" id="third-yr" /> Third Year <br>
      <input type="radio" id="fourth-yr" /> Fourth Year <br>

      <button type="submit">Submit</button>
    </div>
  </body>
</html>
