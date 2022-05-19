<?php 
    session_start();
    if(session_destroy()) // Destroying all sessions
    {
        header("Location: signin.php"); // Redirecting to homepage
    }
?>