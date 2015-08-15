<?php 

    $to = "murilloivan@gmail.com";

    $subject = "Codealo Consulta";
 
    $nombre = $_POST["nombre"];
    $from = $_POST["email"];
    $text = $_POST["texto"];
    $message = "Nombre: " . $nombre . "\n" . "Duda o Consulta: " . $texto . "\n" ;

		$headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

    header("Location: index.php");

 ?>