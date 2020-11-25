<?php

session_start();
echo "logging you out. PLease wait";
session_destroy();

header('locaion: /Portal-Designning-Institute/college_medical/college.php')

?>