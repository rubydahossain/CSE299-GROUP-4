<?php  

require "dfunction.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: dprofile.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doctor Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS files/psignup.css">
	<link rel="stylesheet" href="CSS files/dlogin.css">
    <script src="https://kit.fontawesome.com/4a1ae0c7a9.js" crossorigin="anonymous"></script>
</head>
<body>

	

	<div class="container2">
		

		<div class="form-box">
           
		   <h1 id="title">Doctor's Login</h1>

		   <div class="error">
			<?php if(count($errors) > 0):?> <style>.error{display: flex}</style>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

			</div>


		   <form action=" " method="post">

			   <div class="input-group">
				  
				   <div class="input-filed">
					   <i class="fa-solid fa-envelope"></i>
					   <input type="email" name="email" placeholder="Email">
				   </div>

				   <div class="input-filed">
					   <i class="fa-solid fa-lock"></i>
					   <input type="password" name="password" placeholder="password">
				   </div>

				   <div class="btmtxt">
				   		<p>Forgot Password <a class="click" href="#">Click Here</a></p>
				   		<p>Don't have an Account <a class="click" href="dsignup.php">Click Here</a></p>
					</div>
			   </div>
			   <div class="btn-field">
				   <input type="submit" value="Login">
				  
			   </div>

		   </form>
	   </div>

	</div>
</body>
</html>