// For testing lang ni gob kung maka login ba si admin

function validate() {
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if (username == 'attendance2k22' && password == 'dtp2k22') {
    window.location.assign('admin.html');
    return false;
  } else {
    document.getElementById('username').disable = true;
    document.getElementById('password').disable = true;
    window.alert('Login Failed!');
    return false;
  }
}