<div class="alert alert-success">
<br />
        <center>
        <table border="0"> 
        <tr>
        <td width="600">
        <img src="images/forum.png" width="690" height="360" alt="..." class="img-square thumbnail">
        <div class="alert alert-danger">Please be aware that the Forum is a public message board which can be
         viewed by the general public.  Any personal information that you disclose on the Forum
          will be available for the general public to read - it is strongly recommended that
           you do not post personal details or sensitive personal data on the Forum.</div>
        </td>
        <td>&nbsp;</td>
       <td width="600">
       
       
       	<div class="panel panel-info">
       <div class="panel-heading">
     <h3> New? Register Here!</h3>
        </div>
        			<div class="panel-body">
       <center>
          <form method="post"  enctype="multipart/form-data">
       
       <table border="0">
       
       
       
       <tr>
       <td>
       <input  type="text" name="fname" class="form-control" rows="2" placeholder="Firstname" required> 
       </td>
       <td>
       &nbsp;
       </td>
         <td>
       	<input type="text" name="mname" class="form-control"  placeholder="Middlename" required> 
       </td>
         <td>
       &nbsp;
       </td>
         <td>
       	<input type="text" name="lname" class="form-control"   placeholder="Lastname" required> 
       </td>
      </tr>
      
      
 
        
         <tr>
      <td>
      &nbsp;
      </td>
      </tr>
      
       <tr>
       
        <td>
      <select name="gender" class="form-control">
      <option>Male</option>
      <option>Female</option>
      </select>
       </td>
        <td>
      &nbsp;
      </td>
        <td>
       	<input type="date" name="bdate" class="form-control" title="mm-dd-yyyy"  placeholder="Date of Birth" required> 
       </td>
        <td>
      &nbsp;
      </td>
        <td>
      <select name="yearlvl" class="form-control">
         <option>-</option>
      <option>Student</option>
      <option>Professional</option>
      
      </select>
       </td>
        </tr>
         
   
        <tr>
      <td>
      &nbsp;
      </td>
      </tr>
      
        <tr>
        <td>
       	<input type="text" name="cnum" class="form-control"   placeholder="Contact Number" required> 
       </td>
        <td>
      &nbsp;
      </td>
          <td colspan="3">
       	<input type="email" name="eaddress" class="form-control"   placeholder="Email Address" required> 
       </td>
       </tr>
       
     
       
        <tr>
      <td>
      &nbsp;
      </td>
      </tr>
      
        <tr>
        <td colspan="5">
       	<input type="text" name="address" class="form-control"   placeholder="Address" required> 
       </td>
       </tr>
         
   
     
       <tr>
      <td>
      &nbsp;
      </td>
      </tr>
       <tr>
           <td>
       <input type="text" name="idnum" class="form-control"   placeholder="Username" required> 
       </td>
     
        <td>
      &nbsp;
      </td>
       <td>
       <input maxlength="15" type="password" name="pass" class="form-control"  placeholder="Password" required> 
       </td>
        <td>
      &nbsp;
      </td>
       <td>
       <input  maxlength="15" type="password" name="repass" class="form-control"  placeholder="Re-Enter Password" required> 
       </td>
      </tr>
      
       <tr>
      <td>
      &nbsp;
      </td>
      </tr>
       <tr>
       <td colspan="5">
       
	By clicking the Submit Button, you read, agree and understand our<br />
 <a data-toggle="modal" href="tc_modal.php" >Terms & Conditions</a>,
   
   
    <a data-toggle="modal" href="use_site.php" >Use of the Site</a>, 
    
      
    <a href="copyrights.php" >Copyright</a> 
     
     
    and 
    <a  href="privacy.php" >Privacy</a>
   
     Policies.
	  
       </td>
       </tr>
       
		
        <tr>
       <td colspan="5">

        <br />
       </td>
       </tr>
       <tr>
       <td colspan="5">

        <div class="pull-right">
		<button type="submit" name="post" class="btn btn-info"><i class="fa fa-check-circle-o"></i> Submit</button>
		</div>
       </td>
       </tr>
       </table>
       
       	</form>
        </div> </div>
					 
       </center>
       
       
       
        </td>
        </tr>
        </table>
        </center>
        </div>
      <?php 
      
      $conn = new PDO('mysql:host=localhost;dbname=bcc_forum', 'root', '');
      
      	if (isset($_POST['post'])){ 
 
	 				 
							 
                                 $pass = $_POST['pass'];
				                 $repass = $_POST['repass'];
                                 $fname = $_POST['fname'];
				                 $mname = $_POST['mname'];
       	                         $lname = $_POST['lname'];
                                
                                 $idnum = $_POST['idnum'];
                                 $bdate = $_POST['bdate'];
                                 $gender = $_POST['gender'];
                                 $cnum = $_POST['cnum'];
                                 $eaddress = $_POST['eaddress'];
                                 $address = $_POST['address'];
                                 $access = $_POST['yearlvl'];
                                 $status ="inactive";
                                 $acct_stat="Unactive";
                                            
                                            
                                                                
            $query = $conn->query("SELECT * FROM members WHERE username='$idnum' OR email='$eaddress'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
            
            
		if( $num_row <= 0 ) 
        { 
          if($pass==$repass)
                             {
                                if ( $_POST['gender']=="Male")
                                {$iamge="../images/m.jpg";}
                                else
                                {$iamge="../images/f.jpg";}
                                
                                
	$conn->query("insert into members (image,firstname,lastname,middlename,sex,address,contact_no,date_of_birth,username,email,password,access,status,acct_status)
                                 values('$iamge','$fname','$lname','$mname','$gender','$address','$cnum','$bdate','$idnum','$eaddress','$pass','$access','$status','$acct_stat')");
                          ?>
                       
                          	<script>
						 alert('Your request has been submitted to the administrator, Pls. check your email for validation process, you can access your account after the validation. Thank you.');
                     	window.location = 'index.php';
							</script>
                            <?php	
                             }
							 	else
                                {
                                   ?>
                                   	<script>
						 alert('Password did not match! try again.');
                       
							</script>	
       <?php    
                                  
             } 
             
             
             }
             else
             {
              ?>
              <script>
			alert('Username or Email already used. Please try again.');
             </script>
             <?php	
             } } ?>
        
        
      