
<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Email 
$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;                       // Enable verbose debug output
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host       = 'smtp.gmail.com;';      // Specify main SMTP server
$mail->SMTPAuth   = true;                   // Enable SMTP authentication
$mail->Username   = 'your_gmail';           // SMTP username
$mail->Password   = 'your_email_password';  // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 587;                    // TCP port to connect to
$mail->setFrom('your_email', 'username');   // Set sender of the mail

// Database
$user = "root";  
$password = "";  
$host = "127.0.0.1";  
$dbase = "newsletter";  
$table = "customers";

// Connection to Database  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 

// Query Database
$query= "SELECT * FROM $table"; 
$result= mysqli_query ($dbc, $query)  
or die ('Error querying database.'); 

// Collect emails
while ($row = mysqli_fetch_array($result)) { 
	$first_name= $row['firstname']; 
	$last_name= $row['lastname']; 
	$email= $row['email']; 
	$mail->addAddress($email); // Add email
} 

// Close connection
mysqli_close($dbc); 

// Write email
$mail->isHTML(true);                                  
$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['body'];
$mail->AltBody = 'Body in plain text for non-HTML mail clients';

// Send email
$mail->send();

?> 
