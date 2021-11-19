<?php
if(isset($_POST['submit'])){
$email =$_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo $email." is not a valid mail";
}
else {
	  echo $email." is valid, await respose";
}
}
?>

<!-- joshua -->