<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        
        $mailTO = "adonisdangeross@icloud.com";
        $headers = "From: ".$mailFrom;
        $txt =  "You got an email from" .$name.".\n\n".$message;
        mail($mailTO,$headers,$txt);
        header("Location: index.php?mailsend")


    }






?>