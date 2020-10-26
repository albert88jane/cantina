<?php
// Your code here!



   
        
        $cookie_nombre = "comprobacio";
        $cookie_valor = $nom_usuari;
        $cookie_expira =  getdate($data = time());
        setcookie($cookie_name, $cookie_value, $cookie_expira['mday'] + 1);
        
        
       
    

    
?>

<?php


        
       if (isset($_COOKIE["comprobacio"])) {
         list($cookie_value, $cookie_expira['mday' + 1]) = explode("|", $_COOKIE["comprobacio"]);
}
        

    
    ?>