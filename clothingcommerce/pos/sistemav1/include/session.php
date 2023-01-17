<?php
session_start();
	if(!$_SESSION["logged_name"]) {
    die(header('Location: index.php'));
}
?>