<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
	<title>Dashboard</title>
	<link rel="stylesheet" href="css/dashboard.css">


	<script src="js/dashboard.js"></script>

	<style>
		.error {
			color: #FF0000;
		}
	</style>

</head>

<body>
	<div class="header">
		<div class="logo">

			<span>Brand</span>
		</div>
		<a href="#" class="nav-trigger"><span></span></a>
	</div>
	<div class="side-nav">
		<div class="logo">

			<span> <?php echo $_SESSION['username']; ?></span>
		</div>
		<?php include("sidebar.php") ?>
	</div>
	<div class="main-content">
		<div class="title">
			<?php
				include 'model.php';
				$model= new Model();
				$insert= $model->insert();

			?>
			<form method="post" enctype="multipart/form-data">

				<br />


				<h2>EVENTS</h2>

				<div class="item">
					<label for="location">Location<span>*</span></label>
					<input id="location" type="text" name="location">
                </div>
                <div class="item">
					<label for="date">Date<span>*</span></label>
					<input id="date" type="datetime-local" name="date">
                </div>
                <div class="item">
					<label for="stops">Stops<span>*</span></label>
					<input id="stops" type="number" name="stops">
                </div>
                <div class="item">
					<label for="people"> People<span>*</span></label>
					<input id="people" type="number" name="people" />
				</div>
				<div class="item">
					<label for="price"> Price<span>*</span></label>
					<input id="price" type="number" name="price" />
				</div>
				<div class="item">
					<label for="file"> Image <span>*</span></label>
					<input type="file" id="avatar" name="event_image" accept="image/png, image/jpeg">

				</div>
				<div class="item">

				</div>
				<div class="btn-block">
					<button type="submit" name="submit" value="Submit">Create</button>
					</form>
					<div class="title">List of Events</div>
					<table cellpadding="20" cellspacing="5">
<tr>
<th>Id</th>
<th>Price</th>
<th>Location</th>
<th>Date</th>
<th>Stops</th>
<th>People</th>
<th>Image</th>
</tr>
<?php

				$rows= $model->fetchevents();

				if(!empty($rows)){
                    foreach($rows as $row){
                        ?>
                        <tr>
							<td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['price']; ?>�</td>
                            <td><?php echo $row['location']; ?></td>
							<td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['stops']; ?></td>
							<td><?php echo $row['people']; ?></td>
							<td><img src="<?php echo $row['image']; ?>" height="100px" width="100"></td>
						<td><button type="button" >	<a href="delete.php?id=<?php echo $row['id']; ?>" >Delete </a></button></td>
						<td><button type="button" >	<a href="edit.php?id=<?php echo $row['id']; ?>" >Edit </a></button></td>
						<td><button type="button" >	<a href="read.php?id=<?php echo $row['id']; ?>" >Read </a></button></td>
                            <tr>


						<?php
                    }

                }else{
                    echo "IT IS NOT REGISTRED ANY EVENT...";
                }

			?>
</table>
				</div>
		</div>







</body>

</html>
