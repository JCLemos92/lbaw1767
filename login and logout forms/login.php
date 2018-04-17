
<?php
//if(isset($_SESSION['username'])){
if(isset($_SESSION['username'])){ header('Location: ./');}
if(isset($_POST['uname']) && isset($_POST['psw'])){
	include_once('includes/init.php');
	include_once('database/user.php');

	if (isLoginCorrect($_POST['uname'], $_POST['psw'])) {
		echo 'yolo';
		setCurrentUser($_POST['uname']);
		$location = './';
	} else {
		echo 'fail';
		$location = './';
	}
  

	header('Location: ' . $location);
	
	?>
<?} else{
include_once('header.php');?>
	
	<form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span href="./" onclick="window.location = './'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>  
      <tab1></tab1><button class="btn btn-lg btn-primary" type="submit" style ="width:25%;">Login</button>
      <tab1><label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" href="../index.php" onclick="window.location = './'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
	<?
}
include_once('footer.php')?>