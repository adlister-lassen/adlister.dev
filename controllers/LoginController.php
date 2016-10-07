<?php
if (empty(!$_POST)){
	if (! Auth::attempt($_POST['email'],$_POST['password'])){
			header('Location: /login');
			die;
		} else{
			header('Location: /');
		}
}
$main_view = __DIR__.'/../views/users/login.php';