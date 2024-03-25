<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/home.js">

    </script>
    <title>Home</title>
  </head>
  <body>
  <div class="header__logo-box">
         <img src="img/1.png" alt="natours logo" id="home_logo">
       </div>
<nav>
<ul style="margin-left:auto">

<li>
  <a href="home.php">Home</a>
</li>
<li>
  <a href="store.php" >Products</a>
</li>
<li>
  <a href="events.php" >Events</a>
</li>
<li>
  <a  href="contactus.php" >Contact US</a>
</li>
<?php
session_start();
include 'model.php';
$dashboardLink = '';
if (isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == 'admin') {
    $dashboardLink = '<li><a href="dashboard.php">Dashboard</a></li>';
}
?>

<?php echo $dashboardLink; ?>

<li>

<a href="images.php">Images</a>

</li>
<li id="login">
<?php
	

 if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
      <a href="logout.php">Logout</a>
<?php }else{ ?>
     <a href="login.php">Login</a> 
   
<?php } ?>

</li>
</ul>

</nav>
</body>