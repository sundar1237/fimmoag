<?php

function sendMail(){
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    ini_set("SMTP", SMTP_HOST);
    ini_set("smtp_port", SMTP_PORT);
    ini_set("sendmail_from", MAIL_FROM_ADDRESS);
    
    $toAddress=MAIL_TO_ADDRESS; 
    $today = date("d-m-Y H:i:s");
    $subject="[Enquiry]:: ".$first_name." ".$last_name;
    $content="<html><head><style>
table {
  border-collapse: collapse;
}
        
table, th, td {
  border-bottom: 1px solid #ddd;
}
th{
    background-color: #4CAF50;
    color: white;
    border-right: 1px solid white;
    font-weight: bold;
}
th, td {
  padding: 15px;
  text-align: left;
  font-size:14px;
  font-family: 'Lucida Console', Courier, monospace;
}
</style></head><body>
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date</th>
		<th>Mobile Number</th>
		<th>Email</th>
        <th>Message</th>
	</tr>
	<tr>
		<td>".$first_name."</td>
		<td>".$last_name."</td>
		<td>".$today."</td>
        <td>".$mobile_no."</td>
		<td>".$email."</td>
		<td>".$message."</td>
	</tr>
</table></body></html>";
    
    $headers = "From: ";
    $headers = "From: " . strip_tags(MAIL_FROM_ADDRESS) . "\r\n";
    $headers .= "Reply-To: ". strip_tags(MAIL_FROM_ADDRESS) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    mail($toAddress, $subject, $content, $headers);
    //echo "Check your email now....&lt;BR/>";
    
}
?>