<?php
include 'model.php';
$model= new Model();
$id=$_REQUEST['id'];
$delete= $model->delete($id);

if($delete){
    echo "Delete successfully";
  echo "<script>window.location.href='add_events.php'</script>";
}


 
?>