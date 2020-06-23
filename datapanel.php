<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>


 
  <?php

$un=$_POST['username'];
$pass=$_POST['password'];


$host="hostname";
$username="username";
$password="password";
$db="databasename";

$conn=mysqli_connect($host,$username,$password,$db) or die("conn failed");
$que="SELECT * FROM tablename WHERE username LIKE '{$un}' AND password LIKE '{$pass}';";
$qu=mysqli_query($conn,$que) or die("query failed");
if(mysqli_num_rows($qu)>0)
{
   $result="SELECT id,name,email,message FROM tablename;";
   $qu=mysqli_query($conn,$result) or die("query failed");
   if($row=mysqli_num_rows($qu) >0)
   {
     ?>
     <div class="container ">
  <div class="row mt-2">
    <div class="col-6" >
    <h2  class=" mt-2 mb-3">ALL RECORDS</h2>
</div>
<div class="col-6 mt-3"> 
  <button class="float-right" style="border-radius: 8px;" id="logoutbutton" ><a href="http://localhost/resume/admin.php"><h6 >Logout</h6></a></button>

</div>

  </div>
  <div class="row mt-3">

  
    
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
       <?php
        while($rec=mysqli_fetch_assoc($qu))
       {
    ?>
   
  <tr>
      <th ><?php echo $rec['id']; ?></th>
      <td><?php echo $rec['name']; ?></td>
      <td><?php echo $rec['email']; ?></td>
      <td><?php echo $rec['message']; ?></td>
    </tr>
    </tbody>
    <?php
}
   }
   else{
       echo "error";
   }
       
}
else{
    echo "<h3>Record Not Found</h3>";
}
mysqli_close($conn);
?>
</div>

</table>
</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
