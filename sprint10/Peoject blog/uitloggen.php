<?php
// vind de sessie
session_start();
// einde sessie melden
echo "Tot ziens ". $_SESSION['USER'];
// verwijder de sessie
sesion_distroy();
?>