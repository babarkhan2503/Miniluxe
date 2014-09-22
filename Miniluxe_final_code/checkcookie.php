<?php
if(($_COOKIE["admin_access_token"] == '') || ($_COOKIE["admin_access_token"] == null))
{
   header("Location: login.php");
}   
 
?>