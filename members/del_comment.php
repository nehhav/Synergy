 

<br />
<br />

 
<?php

	include('header.php');
    $comment_id=$_GET['comment_id'];
    $post_id=$_GET['post_id'];
   	$post_query = $conn->query("select * from comment LEFT JOIN members on comment.member_id = members.member_id where comment_id='$comment_id'");
									while($post_row = $post_query->fetch())
                                    {
									   
								
    
?>
<form target="_self" method="post" action="del_comment.php">
<input name="del_id" type="hidden" value="<?php  echo $comment_id;  ?>" />
<input name="post_id" type="hidden" value="<?php  echo $post_id;  ?>" />

<div class="alert alert-danger">
<center>
<table width="600" border="0">
<tr>
<td  >
<div class="alert alert-info">
 <font size="5">
 <center>
 CONFIRMATION </center></font> </div>
</td><td></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td colspan="2">
 <font size="5">
Are you sure you want to delete this Comment?
 </font>
</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td> <font size="4"><?php echo "Commented by: ".$post_row['firstname']." ".$post_row['middlename']." ".$post_row['lastname'];?> </font></td>
<td> <font size="4"><?php echo  "Date Commented: ".$post_row['date_commented'] ;?> </font></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"> <font size="4"><?php echo   "Comment Content: ".$post_row['comment_content'] ;?> </font></td>
 </tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="300">
<button class="btn btn-danger" name="delete" ><li class="fa fa-trash-o"></li> Delete</button>
 &nbsp;<a href="home.php" class="btn btn-default"  >Cancel</a>
</td>
<td></td>
</tr>

</table></center>
</div>
</form>



	<?php }
							if (isset($_POST['delete'])){
					  
                         $del_id = $_POST['del_id'];
                          $post_id = $_POST['post_id'];
					   
								$conn->query("delete from comment where comment_id = '$del_id'");
                                
                               
				$post_query = $conn->query("select * from post where post_id='$post_id'");
				while($post_row = $post_query->fetch())
                {
                $threads=$post_row['threads']-1;
                }
                $conn->query("update post set threads='$threads' where post_id='$post_id' ");
					
                    ?>
			 <script>
	window.location = 'home.php';
</script>
                     <?php   }		?>