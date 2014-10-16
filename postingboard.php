<?php 
	include 'JobDB.php';
	$title = $_GET['title'];
	$title = $_GET['salary'];
	$title = $_GET['jobdesc'];
	$title = $_GET['location'];
	$title = $_GET['qualification'];
	$title = $_GET['employer'];
	$title = $_GET['website'];
	$result=addJobs($title, $salary, $jobdesc, $location, $qualification, $employer, $website);

?>