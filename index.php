<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<div id="bg"></div>
<form method="POST" action="log.php">
  <div class="form-field">
    <input type="text" name="user" placeholder="Username" required/>
  </div>
  <div class="form-field">
    <input type="password" name="pass" placeholder="Password" required/>                         
  </div>
  <div class="form-field">
    <input class="btn" type="submit" value="LOG IN" />
  </div>
</form>
</body>
</html>
