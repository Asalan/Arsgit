<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// Delete certain session
unset($_SESSION['username']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index.php?page=main');
?>
