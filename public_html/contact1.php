<?php
if(!$_POST) exit;

$email = $_POST['email'];

if($errors==1) 
	echo $error;
else{
	$values = array ('Name','Email','Phone','Msg');
	$required = array('Name','Email','Phone','Msg');

	$your_email = getenv('CONTACT_EMAIL') ?: "omesh_tank@yahoo.com";
	$from_email = "From: info@konarkcomputers.in\r\nReply-To: ".$_POST[$email];
	
	$email_subject = "Inquery On Your Site....";
	$email_content = "New Inquery:\n";
	
	foreach($values as $key => $value){
	  if(in_array($value,$required)){
		if ($key != 'Email' && $key != 'Phone') {
		  if( empty($_POST[$value]) ) 
                  { 
                     echo 'PLEASE FILL IN REQUIRED FIELDS'; exit; 
                  }
		}
		$email_content .= $value.': '.$_POST[$value]."\n";
	  }
	}
	 
	if(@mail($your_email,$email_subject,$email_content,$from_email)) {
		echo "<font><b>Your Request Sent Thanks! --- We will contact you very soon!!!</b></font>";
		
	} 
	else 
	{
		echo 'ERROR!';
	}
	//header('Location: http://www.icontechnology.in/');
}
?>
<script type="text/javascript">
	window.location="http://www.konarkcomputers.in/contact.php";
</script>