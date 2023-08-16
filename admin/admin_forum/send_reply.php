
	<?php
						 
							 
    include('header.php');             
  include('../session.php'); 
    $recep_id=$_GET['id'];
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../../msg_images/" . $_FILES["image"]["name"]);
                                
                                $location = "../msg_images/" . $_FILES["image"]["name"];
							 	$subject = $_POST['subject'];
       	                        $msg = $_POST['msg'];
                                  $msg = $_POST['msg'];
                                $msg_id = $_POST['msg_id'];
       	                        $status =  "Unread";
								$date_posted = date('m'.'/'.'d'.'/'.'Y')."  |  ".date("h:i:sa");
                                
								$conn->query("insert into message (message_content,status,date_messaged,message_image,subject,member_id,sender_id,access) 
                                                                  values('$msg','$status','$date_posted','$location','$subject','$recep_id','$session_id','Admin')");
							?>
							<script>
								window.location = 'read_msg.php?id=<?php echo $msg_id;?>';
							</script>	
						 