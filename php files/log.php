<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
		  	<link rel="stylesheet" type="text/css" href="styles.css">
			<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>USER</title>
    <style>
	 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
		.bgimage{
	background-image: url('h.jpg');
	background-size: 100% 110%;
	width: 100%;
	height: 100vh;
}
        body{
            font-family: "Open Sans";
            color: #fff;
        }
        
		.menu{

	width: 100%;
	height: 100px;
	background-color: rgba(0,0,0,0.5);
}
nav:after{
	content: '';
	display: block;
	clear: both;
}
.leftmenu{
	width: 40%;
	line-height: 100px;
	float: left;
/*	background-color: yellow;*/
}

.leftmenu h4{
	padding-left:70px;
	font-weight: bold;
	color: white;
	font-size: 22px;
	font-family: 'Montserrat', sans-serif;
}


.rightmenu{
	width:60%;
	height: 100px;
	float: right;
/*	background-color: red; */
}

.rightmenu ul{
	margin-left: 200px;
}
.rightmenu li {
	display: inline-block;
	list-style: none;
	position: relative;

}
.rightmenu ul li {
	font-family: 'Montserrat', sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: 80px;
	text-transform: uppercase;

}


.rightmenu ul li:hover{
	color: orange;
}
.rightmenu li:hover .dropdown{
	display: block;
}
.dropdown {
	background-color: rgba(0,0,0,0.8);
	position: absolute;
	display: none;
	top: 99px;
	left: -210px;
	right: 10px;
	width: 250px;
}
.dropdown li{
	border: 2px solid #222;
	display: block;
	color: #fff;
}
        .form-container{
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 500px;
            padding: 50px 30px;
            border-radius: 10px;
            box-shadow:7px 7px 60px #000;
        }
        h1{
            color: aqua;
            font-size: 2.5em;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2rem;
        }
        .control input{
            padding: 10px;
            font-size: 20px;
            display: block;
            width: 100%;
            color:#000;
            background: #ddd;
            outline: none;
            border: none;
            margin: 1em 0;

        }         
        .control .btn{
            color: #fff;
            text-transform: uppercase;
            background: crimson;
            opacity: .7;
            transition:opacity .3s ease;
        }
        .btn:focus{
            opacity: 1;
        }
        p{
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #fff;
            
        }
        a:hover{
            color: orange;
        }
    </style>
</head>
<body>
<div class="bgimage">
		<div class="menu">
			<nav>
			<div class="leftmenu">
				<h4> Sports Management System </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<li ><a href="index.html"> HOME</a> </li>
					<li><a href="events.html"> Events</a> </li>
					<li> <a href=""> Log in</a> 
					     <ul  class="dropdown">
                                <li><a href="admin.php">Admin login</a></li>
                                <li><a href="log.php">User login</a></li>
				         </ul>
				    </li>
					
					<li><a href="index4.php">Feedback</a></li>
				</ul>
			</div>
         </nav>
		</div>
    <section>
        <div class="form-container">
		<form action="login.php" method="post">
            <h1>User Login Form</h1>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <div class="control">
            <label for="name">User Name</label>
            <input type="text" name="uname" placeholder="User Name" >
            </div>
            <div class="control">
            <label for="psw">Password</label>
            <input type="password" name="password" placeholder="Password" >
            </div>
            <span><input type="checkbox"> Remember me</span>
            <div class="control">
            <input type="submit" class="btn" value="Login">
            </div>
        </form>
       <a href="forgot.php">Forget Password</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        Don't have an account?&nbsp<a style="color: white;" href="signup.php">Sign Up</a> 
        </div>
		</div>
		<footer class="footer">
      <div class="footer-container">
        <div class="footer-row">
          <div class="footer-col">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Our Team</a></li>
              
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="#">Email: contact@sportsmanagement.com</a></li>
              <li><a href="#">Phone: +123 456 7890</a></li>
              <li><a href="#">Address: 123 Sports Ave, City</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Sports Management System. All rights reserved.</p>
      </div>
    </footer>

    <!-- Font Awesome for social media icons -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    </section>
</body>
</html>