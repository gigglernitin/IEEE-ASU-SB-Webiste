
<?php

    require 'connect.php';
	$conn    = Connect();
$subject=$_POST['Subject'];
$note=$_POST['Message'];

/* my testing variables
$subject= "The subject";
$note= "My little note";
*/

$sender="mohamed.mnsoor_1995@yahoo.com"; // Your Email here.
echo "Email has been sent to: ";

$query_Events = "SELECT `email` FROM reg";
$rs = mysqli_query($conn,$query_Events) or die(mysqli_error($gpd));

if(!$rs)
{
echo mysqli_error();
}
else{ // Do while loop to send email.
    while($row = mysqli_fetch_assoc($rs)){
    $to=$row['email'];

$mail_from = "From: $sender" . "\r\n" . "Reply-To: $sender" . "\r\n";
$mail_from .= "Content-type: text/html; charset=utf-8 \r\n";

mail($to,$subject,$note,$mail_from);

// Show sent emails.
// echo "$row[email]<br>";
echo "$row[email]" . "<br>";
    }
}
	$conn->close();

?>

