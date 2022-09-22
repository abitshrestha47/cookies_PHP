<?php

    if(isset($_COOKIE['email'])){
        echo "logined";
    }
    else{
        echo "not logined";
    }
    if(!$_COOKIE['email']){
        header('location:index.php');
    }
?>