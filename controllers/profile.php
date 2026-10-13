<?php
function profileAction(){

    redirectionLogin();

    
    
    if ($_SESSION['isAdmin']) {
        echo " admin";
    } else {
        echo "user";
    }

}


?>