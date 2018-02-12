<?php

    require_once '../model/DB.php';
    require_once '../model/UserDB.php';

    $base= "http://localhost/MesProjets/TP_gestion_user/";
    if(isset($_POST['valider']))
    {
        extract($_POST);
        if($password1 == $password2)
        {
            $ok = addUser($nom,$prenom,$login,$password1);

            header("location:$base?page=ajoutUser&ok=$ok");
        }
        else
        {
            $ok=0;
            header("location:$base?page=ajoutUser&ok=$ok");
        }

    }

    if(isset($_POST['modifier']))
    {
        extract($_POST);
        
        $ok2 = updateUser1($mat,$nom,$prenom,$login);
        header("location:$base?page=listeUser");
    }