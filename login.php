<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="css/login.css">
  <title>Login | Admin</title>
</head>
<body>
  <div class="login-form">
    <form>
      <img src="img/dtp_owl.png">
      <h1>DTP Admin</h1>
      <div class="content">
        <div class="input-field">
          <input type="text" placeholder="Username" id="username" autocomplete="off">
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" id="password" autocomplete="new-password">
        </div>
      </div>
      <div class="action">
        <input type="button" onclick="validate()" id="submit" value="Login">
      </div>
    </form>
  </div>  
  <script src="js/login.js"></script>
</body>
</html>