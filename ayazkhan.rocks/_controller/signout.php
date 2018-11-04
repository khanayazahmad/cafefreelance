<?php
$file = fopen("../_resources/Sec_Files/root_key.data","w") or die("Unable to open file!");
fwrite($file,"");
fclose($file);
header("Location: ../Welcome.html");