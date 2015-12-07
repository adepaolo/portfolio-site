<?PHP

$myemail = 'adepaolo25@gmail.com';//<-----Put Your email address here.
$name = $_POST['custname'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$email_address = $_POST['email']; 
$message = $_POST['message']; 

$to = $myemail; 
$email_subject = "New order from: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n Address: $street, $city, $state $zip \n Phone Number: $phone \n Email: $email_address \n Message: \n $message"; 

$headers = "From: $myemail\n"; 
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: anthonydepaolo.com/dev/APE2/home.htm');

?>