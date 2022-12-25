<?php

	require "pfunction.php";
	check_login();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Patient's Profile</title>
	
	<link rel="stylesheet" href="CSS files/sidebar.css">
	<link rel="stylesheet" href="CSS files/menuebar.css"> 
    <link rel="stylesheet" href="CSS files/Homepage.css">
    <link rel="stylesheet" href="CSS files/dprofile.css">
</head>
<body class="body1">

<div class="hi" > 
	<h1 class="h1" > Easy Pescribe Patient's Profile</h1>
	
</div>
<div class="sidebar" >
            <div class="Quick"><?php if(check_login(false)):?>
					Hi, <?=$_SESSION['USER']->username?>;
					<?php endif;?>
			</div>
            
            <ul>
                <li class="sidebar-link" ><a href="Homepage.html"> Home</a></li>
    
                
                <li class="sidebar-link"><a href="Patient_Details_Form.html"></i>Update Profile</a></li>
    
    
    
                <li class="sidebar-link"><a href="#"><i class="fa fa-users"></i>Prescription</a>
                
                </li>
    
                <li class="sidebar-link"><a href="searcahmedicine.php"><i class="fa fa-angellist"></i> Medicine</a>
                
                </li>
    
                <li class="sidebar-link"><a href="plogout.php"><i class="fa fa-inr"></i>Logout</a>
                
                </li>
            </ul>

        </div>

<div>

</div>

	
 
	

 

</body>
</html>