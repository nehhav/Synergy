<?php
include('header.php');

$del_msg=$_GET['del_id'];

	$conn->query("delete from message where message_id = '$del_msg'");
					
                    ?>
			 <script>
	window.location = 'inbox.php';
</script>
                  