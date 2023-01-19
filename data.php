<?php

if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email=  validate($_POST['email']);
    $password= validate ($_POST['password']);

    if(empty($email)){
        header("Location: index.php?Email is required");
        exit();
    }
    elseif(empty($password)){
        header("Location: index.php?Password is required");
        exit();
    }else{
        echo"Valid input";
    }
}
else{
    header("Location: index.php");
    exit();
}


?>