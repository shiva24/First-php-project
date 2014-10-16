<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="shortcout icon" type="icon/ico" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYAHviVD1SLhdZgPh-fmXmb9zCTYLltW6bC44jGOIcr2Cl1ecr">
</head>
<body>
	<div id="container">
		<div class="main">
		     <form class="form"  method="GET" action="">
				<h2>Dont have account? Signup</h2><hr/>
					<label>User name :</label>
					<input type="text" name="dname" id="name" placeholder="name"><br>
					<label>Password :</label>
					<input type="password" name="password" id="password" placeholder="password"><br>
					<label>Confirm password :</label>
					<input type="password" name="password" id="password" placeholder="re-enter password"><br>
					<input type="submit" name="submit" id="submit" value="Sign up">
					<p><a href="#contain">Do you have already acoount? Login</a></p>
				</form>
			</div>
		</div>

		<div id="contain">
			<div class="mainn">
		     	<form class="form"  method="GET" action="check_login.php">
					<h2>Login jobs</h2><hr/>
					<label>User name :</label>
					<input type="text" name="name" id="name" placeholder="User name"><br>
					<label>Password :</label>
					<input type="password" name="password" id="password" placeholder="Password"><br>
					<input type="submit" name="submit" id="submit" value="Login">
					<input type="checkbox" name="vehicle" value="Bike"><label id="lable1">Stay loged in</label><br>
					<p><a href="#container">Creat an account</a></p>
		 	 </form>
		</div>
	</div>
</body>
</html>

<style>

body{
	background: rgba(155, 194, 0, 1);
}
a{
	text-decoration: none;
	color: white;
}
a:hover{
	color: red;
}
h2{
	text-align: center;
	font-size: 24px;
}

hr{
	margin-bottom: 30px;
}
#lable1{
	font-size: 14px;
	margin-top: 20px;
}
#container{
	width: 960px;
	height: 610px;
	margin:50px auto;
	font-family: 'Droid Serif', serif;
	position:relative;
}

div.main{
	width: 370px;
	float:left;
	padding: 10px 55px 40px;
	background-color: rgba(10, 219, 90, 1);
	border: 1px solid rgba(150, 150, 5, 5);
	box-shadow: 0 0 10px;
	border-radius: 2px;
	margin-left: -90px;
	font-size: 13px;
	height: 420px;
	margin-left: 209px;
	margin-top: 50px;
}

input[type=text],[type=password] {
	width: 97.7%;
	height: 16px;
	padding-left: 5px;
	margin-bottom: 20px;
	margin-top: 8px;
	box-shadow: 0 0 5px #00F5FF;
	border: 2px solid #00F5FF;
	color: #4f4f4f;
	font-size: 14px;
	font-weight: bold;
	border-radius: 2px;
	cursor: pointer;
}

input[type=checkbox]{
	color: red;
	font-size: 12px;
}

label{
	color: #464646;
	text-shadow: 0 1px 0 #fff;
	font-size: 20px;
	font-weight: bold;
}
p{
	font-size: 15px;
	text-align: right;
}
#submit {
	font-size: 14px;
	margin-top: 15px;
	background: linear-gradient(#22abe9 5%, #36caf0 100%);
	border: 1px solid #0F799E;
	padding: 7px 35px;
	color: white;
	text-shadow: 0px 1px 0px #13506D;
	font-weight: bold;
	border-radius: 2px;
	cursor: pointer;
	width: 100%;
}

#submit:hover{
    background: linear-gradient(#36caf0 5%, #22abe9 100%);
}

#register:hover{
    background: linear-gradient(#36caf0 5%, #22abe9 100%);
}
div.contain{
	margin-left: 830px;
	margin-top: -0px;
}

div.mainn{
	width: 380px;
	float:center;
	padding: 10px 55px 40px;
	background-color: rgba(10, 219, 90, 1);
	border: 1px solid rgba(150, 150, 5, 5);
	box-shadow: 0 0 10px;
	border-radius: 2px;
	margin-left: 355px;
	margin-top: 180px;
	margin-bottom: 150px;
	font-size: 10px;
}	
</style>