<?
  $db = mysqli_connect( "localhost", "root", "root", "record" );
  $query = mysqli_query( $db, "SELECT * FROM `todo`" );
?>