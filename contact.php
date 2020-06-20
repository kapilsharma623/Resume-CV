<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<style>

    .mess
    {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    font-size: 40px;
  
    }

</style>

</head>
<body >


<div class="mess d-flex justify-content-center">

<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$host="sql211.epizy.com";
$username="epiz_26057781";
$password="BOG5lrrAbUxu4b";
$db="epiz_26057781_resume";
//$host="127.0.0.1:3325";
//$username="root";
//$password="";
//$db="resume";

$conn=mysqli_connect($host,$username,$password,$db) or die("conn failed");
$que="INSERT INTO data (name,email,message) VALUES ('$name','$email','$message');";
$qu=mysqli_query($conn,$que) or die("query failed");
if($qu==true)
{
    echo "Message Sent"; 
       
}
else{
    echo "Message Failed";
}
mysqli_close($conn);


?>
</div>




<script>
    alert("Message sent");
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>


      
      