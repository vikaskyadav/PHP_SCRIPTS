function send_email($to_email,$subject,$message1)
{
	require_once 'Mandrill.php';
$apikey = 'XXXXXXXXXX'; //specify your api key here
$mandrill = new Mandrill($apikey);

$message = new stdClass();
$message->html = $message1;
$message->text = $message1;
$message->subject = $subject;
$message->from_email = "blog@koonk.com";//Sender Email
$message->from_name  = "KOONK";//Sender Name
$message->to = array(array("email" => $to_email));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
}
