<!--
<?php
ob_start();
session_start();
?>
-->
<?php include('navbar.php'); ?>
<?php include('header.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="../LMS/E.B. Magalona.png" class="img-rounded">
					</div>
					
				<div >
					   <div class="login">
					   
					<div class="log_txt">
	
					<p><strong>Please Enter User Name and Password</strong></p>
					</div>
							<form class="form-horizontal" method="POST">
									<div class="control-group">
										<label class="control-label" for="inputEmail">User Name</label>
										<div class="controls">
										<input style="width: 100%;
	  padding: 13px 10px;
	  margin: 8px 0;
	  box-sizing: border-box; width:250px;" type="text" name="username" id="username" placeholder="Enter User Name" required>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword">Password</label>
										<div class="controls">
										<input  style="width: 100%;
	  padding: 13px 10px;
	  margin: 8px 0;
	  box-sizing: border-box; width:250px;" type="password" name="password" id="password" placeholder="Enter Password" required>
									</div>
									</div>
									<div class="control-group">
										<div class="controls">
										<button id="login" name="submit" type="submit" class="btn">&nbsp;Submit</button>
									</div>
									</div>
									
									<?php
									if (isset($_POST['submit'])){								
									$username = $_POST['username'];
									$password = $_POST['password'];							
									$con = mysqli_connect('localhost','root','','librarymanagementsystem') or die(mysqli_error());
									$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
									$result = mysqli_query($con,$query)or die(mysql_error());
									$num_row = mysqli_num_rows($result);
										$row=mysqli_fetch_array($result);
										if($num_row > 0) {
											header('location:dashboard.php');
									        $_SESSION['id']=$row['user_id'];
											ob_end_clean();
										}
										else{ ?>
									<div class="alert alert-danger">Access Denied</div>		
									<?php
									}}
									?>

							</form>
					
					</div>
				</div>
				
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>