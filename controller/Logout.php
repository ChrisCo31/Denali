<?php
$session = new Session();
$session->destroy();
$session->setFlash('success', "Vous etes maintenant deconnecté");

// Inclusion du template
include 'templates/logout.php';