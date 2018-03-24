<?php

    require "db.php";

    $data = $_POST;

    if(isset($data['do_login'])){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if($user){
            if (md5($data['password']) == $user->password){
                $_SESSION['logged_user'] = $user;
                echo '<div id="errors" style="color: green;">You have successfully loged in! Now you can go to the <a href="index.php">main page</a>!</div><hr>';
            }
            else{
                $errors[] = 'Invalid password!';
            }
        }
        else{
            $errors[] = 'User with such login does not exist';
        }

        if(!empty($errors)){
            echo '<div id="errors" style="color: red;">'. array_shift($errors) .'</div><hr>';
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
    <link rel="stylesheet" href="css/login.css">
    <title>Log In</title>
</head>
<body>
    
<div class="form__wrapper">
    <div class="row">
        <h3 class="col s12 xl6 offset-m3 offset-l3 offset-xl3">Log In <i class="fas fa-sign-in-alt"></i></h3>
    </div>
    <div class="row">
    <form class="col s12" action="login.php" method='POST'>
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 offset-l3 offset-xl3">
          <input name="login" autocomplete="off" id="first_name" type="text" class="validate" value="<?php echo @$data['login']; ?>">
          <label for="first_name">Your Login</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 offset-m3 offset-l3 offset-xl3">
          <input name="password" autocomplete="off" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col s12 m6 offset-m3 offset-l3 offset-xl3">
          <button type="submit" class="submit__btn" name="do_login">Log In <i class="fas fa-sign-in-alt"></i></button>
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