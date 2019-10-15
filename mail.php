<?php
$to_email = 'pkeyur181@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: pkeyur181@gmail.com';
if(mail($to_email,$subject,$message,$headers)){
    echo "success";
}else{
    echo "fail";
}
?>