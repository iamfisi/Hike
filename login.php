<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Loginn</title>
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $usertype;
      
        $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $row=mysqli_fetch_assoc($result);
            $_SESSION['ROLE']=$row['usertype'];
            $_SESSION['IS_LOGIN']='yes';
            $_SESSION['username'] = $username;
          if($row["usertype"]=="admin"){
            header("Location: dashboard.php");
          } if($row["usertype"]=="user"){
            header("Location: home.php");
          }

        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>
