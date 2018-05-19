
<?php 
if ($_SERVER['REQUEST_URI'] == '/') $page='home';
else {

	$page = substr($_SERVER['REQUEST_URI'], 1);
	
}


$connect = new mysqli('localhost','id1026873_root','2091golf','id1026873_users');

if (file_exists('all/'.$page.'.php')) include 'all/'.$page.'.php';
elseif(file_exists('guest/'.$page.'.php')) include 'guest/'.$page.'.php';
elseif($_SESSION['auth'] == 'true' && file_exists('auth/'.$page.'.php')) include 'auth/'.$page.'.php';
else exit('not_found');





 ?>
