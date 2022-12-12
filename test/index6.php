<?php
if (session_status() == 1) session_start();

setcookie("user", "ealmanza13", time()-(60*60*24));

?>