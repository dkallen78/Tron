<html>
  <head>
    <title>Gracias</title>
    <link rel="stylesheet" type="text/css" href="tron.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  </head>
  <body class="productPage">
    <nav class="navBar">
      <a href="tron.html#contactanos">Contáctanos</a>
      <div class="dropdown" onclick="window.location='#productos'">
        <span>Productos</span>
        <div class="dropdown-content">
          <a href="moscas.html">Moscas</a>
          <a href="rastreros.html">Rastreros</a>
          <a href="mosquitos.html">Mosquitos</a>
          <a href="roedores.html">Roedores</a>
        </div>
      </div>
      <a href="tron.html#conocenos">Conócenos</a>
      <a href="tron.html#inicio">Inicio</a>
      <img src="tronLogo.png" id="tronLogo">
    </nav>
    <div id="afterContact">
      <div id="gracias">¡Gracias por contactarnos!<br />En breve atenderemos tu solicitud.</div>
    </div>
  </body>
</html>



<?php
  $name = $_POST["name"];
  $headers = "From:".$_POST["email"];
  $email = "dkallen78@gmail.com";
  $state = $_POST["state"];
  $subject = "Contacto Nuevo: ".$name." de ".$state;
  $message = htmlspecialchars($_POST["message"]);
  $message = wordwrap($message, 70);

  mail($email, $subject, $message, $headers);
 ?>
