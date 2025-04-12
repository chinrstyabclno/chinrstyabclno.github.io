<?php
require_once 'controller/controller.php';

$page = $_GET['page'] ?? 'home';

$controller = new Controller();
$controller->handleRequest($page);
?>
