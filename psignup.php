<?php  

require "pfunction.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: plogin.php");
		die;
	}
}

?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Sign Up</title> 
    <link rel="stylesheet" href="CSS files/psignup.css">
    <script src="https://kit.fontawesome.com/4a1ae0c7a9.js" crossorigin="anonymous"></script>


</head>
<body>
   

    <div class="container">
        

        <div class="form-box">
           
            <h1 id="title">Patien't Sign Up</h1>
            

            <div class="error" >

			    <?php if(count($errors) > 0):?> <style>.error{display: flex}</style>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			    <?php endif;?>

		    </div>

            <form action="" method="post">
            

                <div class="input-group">
                    <div class="input-filed" id="namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Name">
                    </div>

                    <div class="input-filed">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="input-filed">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password">
                    </div>

                    <div class="input-filed" id="confirmpssrdfield">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password2" placeholder=" Confirm Password ">
                    </div>
                    <div class="btmtxt">
                        <p>Already have a Account <a class="click" href="plogin.php">Click Here</a> to Log in</p>

                    </div>
                    
                </div>
                <div class="btn-field">
                    <input type="submit" value="Signup">
                    <p class="Success"></p>

                </div>
            </form>
        </div>
    </div>

</body>

</html>