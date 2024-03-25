<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link rel="stylesheet" href="css/store.css">
  </head>
  <body>

<header class="header">

<?php include("navbar.php") ?>

</header>



<main>






<?php

$model= new Model();
 $rows= $model->fetchproducts();
 if(!empty($rows)){
    foreach($rows as $row){


?>
  <div class="storeallboxes">

    <div class="first">
      <img src="<?php echo $row['image']; ?>" alt="" width="200px" height="130px">
    </div>

  <div class="second">
    <p><?php echo $row['name']; ?></p>
  </div>

  <div class="price">
    <p><?php echo $row['price']; ?>&euro;</p>
  </div>

  

  </div>







<?php
                    }

                }else{
                    echo "THERE IS NO PRODUCT REGISTRED...";
                }

			?>



</main>



    <footer class="footer">
       <div>
    Have a question? Email us at
    <a href="mailto:example@example.com">hiking@hike.com</a>
</div>

<div>
    <a class="social" href="#"><img src="img/fb.png"></a>
    <a class="social" href="#"><img src="img/ig.png"></a>
    <a class="social" href="#"><img src="img/tw.png"></a>
    <a class="social" href="#"><img src="img/yt.png"></a>
</div>
<div>
    You'll travel with the wind. <span class="name">HIKE.</span>.
</div>


    </footer>



  </body>
</html>
