<?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $db_email='abc@gmail.com';
        $db_pass='abc123';
        if($email===$db_email && $password===$db_pass){
            setcookie("email",$email,time()+20,"/");
            header('location:welcome.php');
        }
        else{
            header('location:index.php');
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <form class="m-5" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <h1>Login Page</h1>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>