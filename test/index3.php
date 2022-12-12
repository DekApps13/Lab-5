<?php
echo "Status: ". session_status();
if (session_status() == 1) session_start();
session_destroy();
echo session_status() == 1? "SESSION DESTRUIDA": "NO SE DESTRUYO";

?>