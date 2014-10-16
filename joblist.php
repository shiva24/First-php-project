<?php
	include 'JobDB.php';

	if ($_GET['title'])
	{
		$title=$_GET['Title'];
		$salary=$_GET['Salary'];
		$jobdesc=$_GET['Jd'];
		$location=$_GET['Location'];
		$qualification=$_GET['Qualification'];
		$employer=$_GET['Employer'];
		$website=$_GET['Webite'];
		addjob ($title, $salary, $jobdesc, $location, $qualification, $employer, $website);
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>joblist</title>
		<link rel="shortcout icon" type="icon/ico" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYAHviVD1SLhdZgPh-fmXmb9zCTYLltW6bC44jGOIcr2Cl1ecr">
	</head>
	<body>
	<div>
	<p><a href="Logout.php">logout</a></p>

<?php
	session_start();
	if (isset($_SESSION['name'])) 
	{
		echo "Hello: " . $_SESSION['name'];
	} else{
		echo "<a href=Login.php?id=" .$row['id']. ">".$row['title']."</a>";
	}


?>



<h1>Jobs list</h1>
	<?php
		$result = getjobs();
		while ($row = mysqli_fetch_assoc($result))
	{
	?>			
	</div>
				<section>
					<ul>
						<li id="li1"><?php echo"<a href=job.php?id=" .$row['id']. ">".$row['title']."</a>"?></li>
						<li id="li1">job title</li>
						<?php echo $row['job title'];?>
						<li id="li1">employer</li>
						<?php echo $row['employer'];?>
						<li id="li1">location</li>
						<?php echo $row['location'];?>
					</ul>
				</section>
<?php
 };
?>
	</body>
</html>


<style>
div{
	height: 50px;
	width: 101.2%;
	border:0px solid red;
	margin-top: -17px;
	margin-left: -9px;
	background: orange;
}
h1{
	color: white;
	font-size: 25px;
	text-align: center;
	margin-top: -18px;
}

a{
	text-decoration: none;
	color: black;
	font-size: 20x;
	float: right;
}

section{
	height: 240px;
	width: 250px;
	border-radius: 5px;
	margin-left: 65px;
	box-shadow: 5px 5px 5px black;
	background-color: #FF9F57;
	margin-top: 55px;
	float: left;
}
body{
	background: rgba(155, 194, 0, 1);
}

h1{
	text-align: center;
}

li{
	font-size: 21px;
}

#li1{
	text-decoration: none;
}

</style>


