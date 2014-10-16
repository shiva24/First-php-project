<!DOCTYPE html>
<html>
<head>
	<title>Job post</title>
	<link rel="shortcout icon" type="icon/ico" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYAHviVD1SLhdZgPh-fmXmb9zCTYLltW6bC44jGOIcr2Cl1ecr">
</head>
<body>
	<div class="container">
		<div class="main">
		     <form class="form"  method="post" action="postingboard.php">
				<h2>Post your job</h2><hr/>
					<label for="title">job title</label>
					<input type="text" name="title" id="title" placeholder="add job title" />
					<label for="Salary">salary</label>
					<input type="text" name="Salary" id="Salary" placeholder="add salary" />
					<label for="location">location</label>
					<input type="text" name="location" id="location" placeholder="add job location" />
					<label for="Qualification">qualification</label>
					<input type="text" name="qualification" id="qualification" placeholder="add qualification" />
					<label for="employer">employer</label>
					<input type="text" name="employer" id="employer" placeholder="add employer" />
					<label for="website">website</label>
					<input type="text" name="website" id="website" placeholder="www.yourdomenname.com" />
					<label>Description</label>
					<textarea type="text" name"Decription" placeholder="Descrieption" /></textarea>
					<input type="button" name="submit" id="submit" value="Submit">
		 	 </form>
		</div>
	</div>
</body>
</html>

<style>

body{
	background: rgba(155, 194, 0, 1);
}

h2{
	text-align: center;
	font-size: 31px;
}

hr{
	margin-bottom: 30px;
}

div.container{
	width: 960px;
	margin-left:200px; 
	height: 610px;
	margin-left: -120px;
	margin:50px auto;
	font-family: 'Droid Serif', serif;
	position:relative;
}

div.main{
	width: 530px;
	float:left;
	margin-left: 140px;
	margin-top: -50px;
	padding: 10px 55px 40px;
	background-color: rgba(10, 219, 90, 1);
	background-color: rgba(15, 219, 90, 1);
	box-shadow: 0 0 10px;
	border-radius: 2px;
	font-size: 13px;
}

input[type=text] {
	width: 97.7%;
	height: 34px;
	padding-left: 5px;
	margin-bottom: 20px;
	margin-top: 8px;
	box-shadow: 0 0 5px #00F5FF;
	border: 2px solid #00F5FF;
	color: #4f4f4f;
	font-size: 16px;
	font-weight: bold;
	border-radius: 2px;
	cursor: pointer;
}

textarea[type=text] {
	width: 97.7%;
	height: 100px;
	padding-left: 5px;
	margin-bottom: 20px;
	margin-top: 8px;
	box-shadow: 0 0 5px #00F5FF;
	border: 2px solid #00F5FF;
	color: #4f4f4f;
	font-size: 15px;
	font-weight: bold;
	border-radius: 2px;
	cursor: pointer;
}

label{
	color: #464646;
	text-shadow: 0 1px 0 #fff;
	font-size: 20px;
	font-weight: bold;
}

#submit {
	font-size: 20px;
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

#submit:hover{
    background: linear-gradient(#36caf0 5%, #22abe9 100%);
}
div.contain{
	margin-left: 830px;
	margin-top: -120px;
}
</style>
