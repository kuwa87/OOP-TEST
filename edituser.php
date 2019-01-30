<?php
    include 'User.php';
    $user_id = $_GET['user_id'];
    $user = new User;
    $row = $user->get_user($user_id);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid p-0">
        <div class="jumbotron p-3 text-white bg-dark rounded-0">Users</div>
        <form action="" method="post" class="p-5">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="psername" value="<?php echo $row['username'];?>">            
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" id="password" value="<?php echo $row['password'];?>">            
            </div>
            <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $row['firstname'];?>">            
            </div>
            <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $row['lastname'];?>">            
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $row['email'];?>">            
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary btn-block">

            <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];

                $user = new User();

                $user->change($username,$password,$firstname,$lastname,$email,$user_id);

            }
            ?>  

        </form>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>