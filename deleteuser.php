<?php

    include 'User.php';
    $user_id = $_GET['user_id'];
    $user = new User;
    $row = $user->get_user($user_id);
    $delete = $user->delete($user_id);


?>