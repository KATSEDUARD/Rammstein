<?php
require "db.php";

$data = $_POST;
if (isset($data['do_signup'])) {
    $errors = array();

    if (trim($data['login']) == '') {
        $errors[] = 'Enter your Login!';
    }

    if (trim($data['email']) == '') {
        $errors[] = 'Enter your Email!';
    }

    if (trim($data['password']) == '') {
        $errors[] = 'Enter your Password!';
    }

    if (trim($data['password_2']) != $data['password']) {
        $errors[] = 'Re-entered password incorrectly entered!';
    }

    if (R::count("users", "login = ?", array($data['login'])) > 0) {
        $errors[] = 'User with such login already exists!';
    }

    if (R::count("users", "email = ?", array($data['email'])) > 0) {
        $errors[] = 'User with such email already exists!';
    }

    if (empty($errors)) {
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = md5($data['password']);
        R::store($user);
        echo '<div id="errors" style="color: green;">You have successfully registered! 
        Now you can go to the <a href="index.php">main page</a> and Log In to your account!</div><hr>';
    } else {
        echo '<div id="errors" style="color: red;">' . array_shift($errors) . '</div><hr>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="form__wrapper">
    <div class="row">
        <h3 class="col s12 xl6 offset-m3 offset-l3 offset-xl3">Join Us! <i class="fas fa-user-plus"></i></h3>
    </div>
    <div class="row">
    <form class="col s12" action="signup.php" method='POST'>
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 offset-l3 offset-xl3">
          <input name="login" autocomplete="off" id="first_name" type="text" class="validate" value="<?php echo @$data['login']; ?>">
          <label for="first_name">Your Login</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 offset-l3 offset-xl3">
          <input name="email" autocomplete="off" id="email" type="email" class="validate" value="<?php echo @$data['email']; ?>">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 offset-l3 offset-xl3">
          <input name="password" autocomplete="off" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 offset-l3 offset-xl3">
          <input name="password_2" autocomplete="off" id="password2" type="password" class="validate">
          <label for="password">Enter Your Password again</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m6 offset-m3 offset-l3 offset-xl3">
          <button type="submit" class="submit__btn" name="do_signup">Sign Up <i class="fas fa-user-plus"></i></button>
        </div>
      </div>
    </form>
  </div>
  </div>



    <script src="js/script.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>