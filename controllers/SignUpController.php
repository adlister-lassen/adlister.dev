<?php
$submitted = isset($_GET['submitted']) ? true : false;
createOrEditUser();
$data['submitted'] = $submitted;
$main_view = __DIR__.'/../views/users/signup.php';