<?php

  $idSaliente = $_GET['idS'];
  $idEntrante = $_GET['idE'];
  $mensaje = $_GET['msj'];

  $conexion = new msqli('localhost','root','','chat_apps2017');
  $insertaMensaje = "INSERT INTO mensajes (idSaliente, idEntrante, mensaje)
                     VALUES ('$idSaliente', '$idEntrante', '$mensaje');";
  $conexion->query($insertaMensaje);

 ?>
