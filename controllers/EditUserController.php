<?php
$data['user'] = findUserOrRedirect();
editUser();
$main_view = __DIR__.'/../views/users/edit.php';