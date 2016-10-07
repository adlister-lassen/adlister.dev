<?php
$submitted = isset($_GET['submitted']) ? true : false;
createUser();
$data['submitted'] = $submitted;
$main_view = __DIR__.'/../views/users/signup.php';