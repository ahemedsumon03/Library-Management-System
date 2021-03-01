
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
     <div class="container">
  <form action="action_page.php" style="margin-top:75px;>

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	<label for="lname">Email Address</label>
    <input type="text" id="emaila" name="email" placeholder="Your email address..">
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Bangladesh">Bangladesh</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="Australia">Australia</option>
      <option value="Japan">Japan</option>
      <option value="India">India</option>
      <option value="Korea">South Korea</option>
      <option value="Singapure">Singapure</option>
      <option value="Thailand">Thailand</option>
      <option value="Hongkong">Hongkong</option>
      <option value="Chaina">Chaina</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input style=" background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;" type="submit" value="Submit">

  </form>
</div> 
<?php include('footer.php') ?>