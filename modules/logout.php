<?php

if (isset($_GET["logout"])){
	if (!isset($_SESSION['user']) or !isset($_SESSION['admin'])) {
		header("Location: url()");
	} else if(isset($_SESSION['user'])!="" or isset($_SESSION['admin'])!="") {
		header("Location: url()");
	}
	
	if (isset($_GET["logout"]) and isset($_SESSION['user']) or isset($_GET["logout"]) and isset($_SESSION['admin'])) {
		session_unset();
		session_destroy();
		header("Location: url()");
		exit;
	}
}

?>