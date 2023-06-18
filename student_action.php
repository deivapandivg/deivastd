<?php  include('config.php');


// if(isset($_POST["username"]) || isset($_POST["mailid"]))
// {


// $Name=$_POST['username'];
// $EmailId=$_POST['mailid'];
// $MobileNumber=$_POST['mobilenumber'];
// $Gender=$_POST['gender'];
// $Qualification=$_POST['checkbox'];
// $Address=$_POST['address'];
// $State=$_POST['state'];
// $District=$_POST['district'];
if(isset($_POST['username'])){$Name=$_POST['username'];}
if(isset($_POST['mailid'])){$EmailId=$_POST['mailid'];}
if(isset($_POST['mobilenumber'])){$MobileNumber=$_POST['mobilenumber'];}
if(isset($_POST['gender'])){$Gender=$_POST['gender'];}
if(isset($_POST['checkbox'])){$QualificationArr=$_POST['checkbox'];}
$Qualification=implode(",", $QualificationArr);
if(isset($_POST['Address'])){$Address=$_POST['Address'];}
if(isset($_POST['dob'])){$Dob=$_POST['dob'];}
if(isset($_POST['state'])){$State=$_POST['state'];}
if(isset($_POST['district'])){$District=$_POST['district'];}


$Insert= "INSERT INTO students(StdName,EmailId,MobileNumber,Dob,Gender,Qualification,Address,State,District,CreatedAt) VALUES('$Name','$EmailId','$MobileNumber','$Dob','$Gender','$Qualification','$Address','$State','$District',Now())";
	$insertQuery=mysqli_query($con,$Insert);
	header("location:dashboard.php");
// }










?>