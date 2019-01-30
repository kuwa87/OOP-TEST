<?php
    //include -ERROR warning and continue
    //require -ERROR no display
    require 'User.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $user = new User("Parameter 1", "Parameter 2");
    echo $user->test();
    echo $user->hello_world();
    echo $user->display();
?>
    
</body>
</html>