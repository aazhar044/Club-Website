<?php
session_start();

$servername = "localhost";
$database = "tpc";
$username = "root";
$password = "";
// Create connection

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());

}

//Variables to prevent errors
$name = ""; //name
$q_id = "";//Q id
$em = ""; //email
$branch = ""; //Branch/Year
$telephone = ""; //MobileNo
$password = ""; //password
#$password2 = ""; //password2
$hobby = ""; //hobbies
$date = ""; //sign up date
#$memid = ""; //unique member id

$error_array = array(); //holds error messages

if(isset($_POST['submit'])) {
  
  $name = strip_tags($_POST['name']); //name
  $q_id = strip_tags($_POST['q_id']);
  $em = strip_tags($_POST['email']);
  $branch = strip_tags($_POST['branch']);
  $telephone = strip_tags($_POST['telephone']);
  $password = strip_tags($_POST['password']);
  #$password2 = ""; //password2
  $hobby = strip_tags($_POST['comments']);
  

  $date = date("Y-m-d"); //Current date



  $query = "INSERT INTO `members`(`id`, `name`, `q_id`, `branch`, `mobile`, `password`, `comments`, `reg_date`) VALUES ('','$name', '$q_id' , '$branch', '$telephone', '$password', '$hobby', '$date')";

    if (!mysqli_query($con, $query)) {
        die('An error occurred. Your review has not been submitted.');
    }
  }


 ?>

 