<?php

    function listeRole()
    {
        $sql="SELECT * FROM role";

        return myExecuteSql($sql);
    }

    function addRole($libR)
    {
        $sql="INSERT INTO role VALUES(null,'$libR')";

        return myExecuteSql($sql);
    }

    function getRole($libeR)
    {
        $sql="SELECT * FROM role WHERE libeR = '$libeR' ";

            return myExecuteSql($sql);
    }

    function updateRole($idR,$libR)
    {
        $sql="UPDATE role set libeR='$libR' WHERE idR=$idR";

        return myExecuteSql($sql);
    }

    function delleteRole($idR)
    {
        $sql="DELETE FROM role WHERE idR = $idR ";

        return myExecuteSql($sql);
    }

    function getRoleById($id)
    {
        $sql="SELECT * FROM role WHERE idR = $id";

        return myExecuteSql($sql);
    }

    function searchRole($libeR)
    {
        $sql="SELECT * FROM role WHERE libeR LIKE '$libeR%'";

        return myExecuteSql($sql);
    }