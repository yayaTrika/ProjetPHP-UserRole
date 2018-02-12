<?php

    function addUserRole($idU,$idR)
    {
        $sql="INSERT INTO userrole VALUES($idU, $idR) ";

        return myExecuteSql($sql);
    }

    function listeRoleDunUser($idU)
    {
        $sql="SELECT * FROM userrole WHERE idU = $idU ";

        return myExecuteSql($sql);
    }