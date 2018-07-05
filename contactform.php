<?php

if(isset($_POST['enviiia'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$mailto="josepmasbolufer@gmail.com";
	$headers= "From: ".$email;
	$text= "Has recibido este mensage de ".$name.":\n\n".$message;
	
	
	if(mail($mailto,"",$text,$headers)){
		echo "<h1> Se ha enviado! Gracias" .$name.",contactaremos contigo en breve";
	}
	else{
		echo " Ha habido algun error!";	
	}
}
?>