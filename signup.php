<?php 
include('db.php');

$conn->query("create table if not exists `customer2` (customer_id int(11) primary key AUTO_INCREMENT, 
	 name varchar(255),
	email varchar(255),
	address text,
    password varchar(255),
	date datetime)");

    $email_error="";

    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['signup'])) {
        $flag=true;
        if(empty($_POST['email'])) {
          $flag=false;
          $email_error="email is empty";
        }
       
        $conn->query("INSERT INTO `customer2` set
       name='".$_POST['name']."',email='".$_POST['email']."',address='".$_POST['address']."', password='".$_POST['password']."',date = now()
       ");
 
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<form action="" method="POST"> 
    <h1 class="text-center">signup</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
   
    <div id="emailHelp"   class="form-text">We'll never share your email else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
    
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
   
  </div>
  
  
  <input type="submit" value="submit"  name="signup" class="btn btn-primary">
  <a href="signup.php" class="btn btn-danger">Cancel</a>

</form>
    </div>
    
</body>
</html>