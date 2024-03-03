<?php
    if(isset($_POST["username"])){
        if(isset($_POST["username"]) == "admin" && $_POST["password"] == "admin123" ){
            header("Location: page1.php");
            exit;
        }else{
            $error = true;
        }
    }
?>