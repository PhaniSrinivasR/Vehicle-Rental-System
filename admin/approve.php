<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	echo $id;
	$query = "UPDATE client SET status = 'Approved' WHERE id_no = '$id'";
	$query2 = "UPDATE hire SET status = 'Approved' WHERE client_id = '$id'";
	$result = $conn->query($query);
	$result2 = $conn->query($query2);
	if($result === TRUE && $result2 === TRUE){
		echo 'Request has Successfully been Approved';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
