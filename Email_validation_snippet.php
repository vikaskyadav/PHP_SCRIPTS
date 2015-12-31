$email = $_POST['email'];
if(preg_match("~([a-zA-Z0-9!#$%&amp;'*+-/=?^_`{|}~])@([a-zA-Z0-9-]).([a-zA-Z0-9]{2,4})~",$email)) {
    echo 'This is a valid email.';
} else{
    echo 'This is an invalid email.';
} 
