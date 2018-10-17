<?php

//delete.php

include('database_connection.php');

if(isset($_POST["id"]))
{
	// $query = "UPDATE addAjax.tbl_name SET status='deleted' WHERE id = '".$_POST['id']."'";
	$query = "DELETE FROM tbl_name WHERE id = '".$_POST['id']."'";
	$statement = $connect->prepare($query);
	$statement->execute();
}


?>
