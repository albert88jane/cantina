<?php


	//Crear coockie per a veure si ja ha demanat el client



        $cookie_nombre = "comprobacio";
        $cookie_valor = $nom_usuari;
        $cookie_expira =  getdate($data = time());
        setcookie($cookie_name, $cookie_value, $cookie_expira['mday'] + 1);





?>
