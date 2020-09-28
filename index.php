<
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login/Register</title>
</head>
<body onload="myFunction()">
	
	<?php 
	include 'dbcon.php';
if(isset)$_POST['submit']{
$user=mysqli_real__escape_string($con, $_POST['user']);
$email=mysqli_real__escape_string($con, $_POST['email']);
$phone =mysqli_real__escape_string($con, $_POST['phone']);
$password=mysqli_real__escape_string($con, $_POST['password']);
$cpassword=mysqli_real__escape_string($con, $_POST['cpassword']);
}
$pass= password_hash($password,password_BCRYPT);
$cpassword= password_hash($cpassword,password_BCRYPT);
$emailquerry="select* from registration where email='$email'";
$querry=mysqli_querry
	?>
	<style type="text/css">
		body{
			overflow: hidden;
			background-image: url(bag.jpg);
		}
		.social_icons{
			margin: 30px auto;
			text-align: center;
		}
		.social_icons img{
			width:  30px ;
			margin: 0 12px;
			cursor: pointer;
			box-shadow: 0 0 20px 0 #7f7f7f3d;
			border-radius: 50%;		
					}
		#loading{
		position: fixed;
		width: 100%;
		height: 100vh;
		background: #fff url('25.gif')
		no-repeat center;
	     z-index: 99999;

	}
		.hero{
			height: 100%;
			width: 100%;
			background-position: center;
			background-size: cover;
			position: absolute; 
		}
		.form{
			background-color: #fff;
			margin: 6% auto;
			padding: 5px;
			width: 380px;
			height: 480px;
			padding: 5px;
			position: relative;
			overflow: hidden;
			border: 5px solid black;
		}
		.button{
			width: 220px;
			margin: 35px auto;
			position: relative;
			box-shadow: 0 0 20px 9px #ff61241f;
			border-radius: 30px;
		}
		.toggle-btn{
			display: inline-block;
			padding: 10px 30px;
			cursor: pointer;
			background: transparent;
			border:0;
			outline: none;
			position: relative;
		
		}
		#btn{
			background: linear-gradient(to right, #ff105f,#ffad06);
		border-radius: 30px;
			top: 0;
			left:0;
			position: absolute;
			width: 100px;
			height: 100%;
			border-radius: 30px;
			background: linear-gradient(to right, #ff105f,#ffad06);
			transition: 0.5s;
		}
		.input-group{
			top: 180px;
			position: absolute;
			width: 280px;
			transition: 0.5s;
		}
		.input-field{
			width: 100%;
			padding: 10px 0;
            margin: 5px 0;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
		}
		.submit-btn{
			width :85%;
			padding:  10px 30px;
			cursor: pointer;
			display: block;
		margin: auto;
		border:0;
		outline: none;
		background: linear-gradient(to right, #ff105f,#ffad06);
		border-radius: 30px;
		}
		.check-box{
			margin: 30px 10px 30px 0;
		}
		span{
			color: #777;
			font-size: 12px;
			bottom: 68px;

		}
		#Login{
			left:50px;
		}
		#Register{
			left:450px;
		}


	</style>
<div class="hero">
	<div class="form">
		<div class="button">
			<div class="btn"></div>
			<button type="button" class="toggle-btn" onclick="Login()" style="background: linear-gradient(to right, #ff105f,#ffad06); border-radius: 30px;">Login
			</button>
	       <button type="button" class="toggle-btn" onclick="register()" style="background: linear-gradient(to right, #ff105f,#fff); border-radius: 30px;">Register</button> 	
		
		</div>
		<div class="social_icons">
			<img src="gp.png">
			<img src="fb.jpg">
			<img src="ig.jpg">
			</div>
	
	<form action="" method="_POST" class="input-group" id="Login" >
		<input type="text" class="input-field" placeholder="User Name" required>
		<input type="Email" class="input-field" placeholder="Email Id" required>
		<input type="text" class="input-field" placeholder="Password" required>
		<input type="checkbox" class="checkbox" placeholder="User Id" ><span>Remember Password</span>
		<button type="submit" class="submit-btn">Login</button>
	</form>
	<form class="input-group" id="Register">
		<input type="text" class="input-field" placeholder="User Name"  name="user" required>
		<input type="Email" class="input-field" placeholder="Email Id"  name="email" required>
         <input type="int" class="input-field" placeholder="Phone Number" name="phone" required>		
		<input type="text" class="input-field" placeholder="Password" name="password" required>
			<input type="text" class="input-field" placeholder=" Confirm Password" name="cpassword" required>
		<input type="checkbox" class="checkbox" placeholder required ><span>I Agree To Terms And Conditions</span>
		<button type="submit"  name="submit" class="submit-btn">Register</button>
	</form>
	</div>
</div>
<div id="toogle" onclick="showhide()"></div>
<script>
	var x= document.getElementById("Login");
	var y= document.getElementById("Register");
	var z= document.getElementById("btn");
	function register(){
		x.style.left="-480px";
	y.style.left="50px";
	z.style.left="110px";

	}
	function Login(){
		x.style.left="50px";
	y.style.left="450px";
	z.style.left="0px";

	}
	var preloader=document.getElementById('loading');
function myFunction(){
	preloader.style.display='none';
}

</script>
<script type="text/javascript">
	const password=document.getElementById('password');
const password=document.getElementById('toogle');
function showhide(){
if (password.type=='password'){
	password.setAttribute('type','text')
	toogle.classList.add('hide')
}else{password.setAttribute('type','text')
	toogle.classList.remove('hide')


}
</script>
</body>
</html>