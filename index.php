
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <title>Home</title>
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form class="register-form" action="signup.php" method="post">
        <input type="text" placeholder="name" name="username" />
        <input type="password" placeholder="password"  name="pass"/>
        <input type="email" placeholder="email address" name="email" />
        <button type="submit" name="save">create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form" action="login.php" method="post">
        <input type="text" placeholder="username"  name="username"/>
        <input type="password" placeholder="password" name="pass" />
        <button type="submit" name="save">login</button>
        <p class="message">
          Not registered? <a href="#">Create an account</a>
        </p>
      </form>
    </div>
  </div>

  <script src="./assets/js/jquery-3.4.1.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/min.js"></script>
</body>

</html>