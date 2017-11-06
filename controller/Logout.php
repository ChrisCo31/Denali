<?php
$session = new Session();
$session->destroy();
header('Location: Home');
// Inclusion du template
include 'templates/logout.php';