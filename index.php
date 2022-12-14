<?php

if(isset($_POST['submit'])){
$name=$_POST['name'];
$mailFrom=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$mailto = "info@abdrentacar.com";
$headers = "From:".$mailFrom;
$txt = "You have received an e-mail from " .$name.".\n\n".$message;


mail($mailto,$subject,$txt,$headers);
header("Location:index.html");



}
?>