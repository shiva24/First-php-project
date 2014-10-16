<?php

	function dbOpen()
	{
		$db = new mysqli("localhost","root","123","jobs");
		return $db;
	}

	function addJobs($title, $salary, $jobdesc, $location, $qualification, $employer, $website)
	{
		$db=dbOpen();
		$sql="INSERT into jobs(title, salary, jobdescription, location, qualifications, employer, website)
		values('".$title."', '".$salary."', '".$jobdesc."', '".$location."', '".$qualification."', '".$employer."', '".$website."')";
		$result = mysqli_query($db, $sql);
	}

	addJobs('d', 'e', 'r','g','h', 'i', 'g');


	function adduser($user, $password)
	{
		$db = dbopen();
		$sql = "INSERT into user(name,password) values('$user', 'password')";
		$result = mysqli_query($db, $sql);

	}

	function getJobs()
	{
		$db = dbopen();
		$sql = "select * from jobs";

		$result = mysqli_query($db, $sql);
		return $result;

	}
/*
	function addjob ($title, $salary, $jobdesc, $location, $qualification, $employer, $website )
	{
		dbopen();
		$sql1="INSERT into jobs (Title, Salary, Job_Description, Location, Qualifications, Employer, website) values('$title','$salary','$jobdesc','$location','$qualification','$employer','$website')";
		$result = mysqli_query($db, $sql1);

	}
*/

	function getjob($id)
	{
		$db = dbopen();
		$sql = "select * from jobs where id='$id'";

		$result = mysqli_query($db, $sql);
		return $result;

	}
	function confirmUser($name, $password)
	{
		$db = dbopen();
		$sql= "select * from user where name = '$name' and password = '$password'";
		$result = mysqli_query($db, $sql);
		$count = mysqli_num_rows($result);
//		echo $count;
		return $count;

	}
	
/*
$result = getJobs();
while ($row = mysqli_fetch_assoc($result))
{
	echo "title: " . $row['title'];
}
*/

	//function getJob() {

	//}
	
?>