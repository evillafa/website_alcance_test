<?php

session_start();
if(session_destroy()) // close sessions
{
header("Location: signin.php"); // go index.php
}
?>