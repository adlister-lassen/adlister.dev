<?php
$data['user'] = findUserOrRedirect();
createOrEditUser();
$data['submitted'] = $submitted;
$main_view = __DIR__.'/../views/users/edit.php';