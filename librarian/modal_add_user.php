	<style type="text/css">
	input[type="text"]
      @extend .transition
      appearance: none
      background-color: none
      border: 1px solid $red
      line-height: 0
      font-size: 17px
      width: 100%
      display: block
      box-sizing: border-box
      padding: 10px 15px
      border-radius: 60px
      color: $red
      font-weight: 100
      letter-spacing: 0.01em
      position: relative
      z-index: 1   

	</style>
	<div id="add_user" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info details" style="text-align:center; width:95.8%;"><strong>Insert the following Information for a new user</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">User Name</label>
				<div class="controls">
				<input  type="text" id="inputEmail" name="username"  placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input type="password" name="password" id="inputPassword" placeholder="Password" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">First Name</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="firstname" placeholder="First Name" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Last Name</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="lastname" placeholder="Last Name" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success">&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer details" style="width:95.8%">
			<button class="btn" data-dismiss="modal" aria-hidden="true"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$con = mysqli_connect('localhost','root','','librarymanagementsystem') or die(mysqli_error());
	mysqli_query($con,"insert into users (username,password,firstname,lastname) values('$username','$password','$firstname','$lastname')")or die(mysql_error());
	}
	?>