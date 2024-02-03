<?php
//connexão
    $connection = mysqli_connect('localhost','Mussi', '1234', 'aaveqTest');
    //checar conexão
    if(!$connection){
        echo ' Connection error: ' . mysqli_connect_error();
    }
?>