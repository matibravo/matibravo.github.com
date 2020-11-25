

<?php

     $Nombre= $_post['nombre'];
     $email=$_post['email'];
     $telefono= $_post['telefono'];
     $comentarios=$_post['comentarios'];

mail('mati.bravo7@gmail.com', 'Contacto web Amasanderia','Nombre:'.$nombre.'Mensaje:'.$comentarios.'mail:'.$email.'fono:'.$telefono);
?>