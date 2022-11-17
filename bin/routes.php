<?php 
if (!str_ends_with($_SERVER["REQUEST_URI"], ".php") && !str_ends_with($_SERVER["REQUEST_URI"], "/")) {
	include "http".$_SERVER["REQUEST_URI"].".php";
	die();
}
?>