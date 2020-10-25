<?
  include('connected.php');

  if(isset($_GET['del'])) {
    $id = $_GET['del'];

    $delete = "DELETE FROM `todo` WHERE id=$id";
    mysqli_query($db, $delete) or die(mysqli_error($db));
  }
?>