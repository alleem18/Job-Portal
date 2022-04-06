<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';


$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection error" .$conn->connect_error);
}


if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO users(Name, Email,phone_no, password) VALUES ('$name','$email','$phone_no','$password')";
    if(mysqli_query($conn, $sql)){
        header("location:login.php");
    }
    else{
        echo"error $sql" .mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['log-submit'])){
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query = "SELECT * FROM users WHERE `email` = '$email' AND `password`= '$password'";
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
        header("location:index.php");
    }
    else{
        $error = "email or pasword is incorrect";
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $Jobdesc=$_POST['JobDesc'];
    $Skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $job = "INSERT INTO `jobs`(`cname`, `position`, `JobDesc`, `skills`, `CTC`) VALUES ('$cname','$position','$Jobdesc','$Skills','$CTC')";
    mysqli_query($conn, $job);
    header("location:index.php");
}
if(isset($_POST['submita'])){
    $college = $_POST['college'];
    $rollno =$_POST['rollno'];
    $name = $_POST['name'];
    $qual = $_POST['qual'];
    $per = $_POST['percentage'];
    $year = $_POST['year'];
     
    $sql = "INSERT INTO `candidates`(`college`,`rollno`, `name`,`qual`, `percentage`,  `year`) VALUES ('$college','$rollno','$name','$qual','$per','$year')";
    mysqli_query($conn, $sql);
    header("location:career.php");

}

mysqli_close($conn);

?>