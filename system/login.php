<?php

if($_POST["usr"] == "admin" && sha1(md5($_POST["psw"])) == "90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad"){
    session_start();
    $_SESSION['login'] = true;
    header("Location: master.php");
}else{
    header("Location: ../index.php");
}

?>