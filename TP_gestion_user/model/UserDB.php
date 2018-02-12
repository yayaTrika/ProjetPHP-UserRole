<?php

    function listeUser()
    {
        $sql="SELECT * FROM user";

        return myExecuteSql($sql);
    }

    function addUser($nom, $prenom, $login, $password)
    {
        $sql="INSERT INTO user VALUES (null, '$nom', '$prenom', '$login', '$password')";

        return myExecuteSql($sql);
    }

    function updateUser1($idU,$nom, $prenom, $login)
    {
        $sql="UPDATE user SET nom = '$nom', prenom = '$prenom' , login = '$login' WHERE idU = $idU ";

        return myExecuteSql($sql);
    }

    function getUserById($id)
    {
        $sql="SELECT * FROM user WHERE idU = $id";

        return myExecuteSql($sql);
    }

