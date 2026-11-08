<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$tel = $_POST['phone'];
	$message = $_POST['message'];

	$mailTo = "contacto@cocina113.com";
	$headers = "From: ".$mailFrom;
	$txt = "Nuevo correo de ".$name."\nCorreo: ".$mailFrom."\nTelefono: ".$tel."\n"."Asunto: ".$subject."\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mail=sent");
}
?>