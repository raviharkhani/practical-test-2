<?php

include('db.php');

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pws= $_POST['password'];
    $query = "SELECT * FROM customer2 WHERE email = '$email' && password = '$pws' ";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total == 1)
    {
        header('location: tableview.php');
    }
    else{
        echo "<h4> enter valid Email and password</h4>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body >
    <div class="container">
<form  action="" method="POST">
    <h1 class="text-center ">Login_page</h1>
  <div class="mb-3">
    <label for="username" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit"  name="login" class="btn btn-primary ">Login</button>
  <a href="signup.php" class="btn btn-success">signUp</a>

</form>
    </div>
</body>
</html>