<?php include('header.php'); ?>
<?php include('session.php'); ?>
<head>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('data.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds
</script>
 
</head>

 

 
  <body>
 
  <?php  include('navbar.php');  ?>
  
   <center> 
   <table width="1200" border="0"><tr><td>
  <div class="container-fluid">
<div class="row">
  
  <div class="col-md-12">
	

 
	<div class="alert alert-success"><i class="fa fa-group"></i> Members Table</div>
		 
	<hr/>
    <div id="load_tweets">
<?php include('data.php'); ?>
    </div>
  
  </div>
</div>
</div>

</td></tr>


<tr><td align="center">  
<?php include('footer.php'); ?>
 </td></tr></table>
  </center>

	
  </body>

</html>