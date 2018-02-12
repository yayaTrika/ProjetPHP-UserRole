<?php

    require_once '../model/DB.php';
    require_once '../model/RolesDB.php';
    require_once '../model/Roles_UserDB.php';

        $base="http://localhost/MesProjets/TP_gestion_user";

///////////////////On associe un role, a une utilisateur
    if(isset($_POST['ajouterRoleUtilisateur']))
    {
        extract($_POST);
        $role = getRole($libR);
        $role = mysqli_fetch_object($role);
        $ok=addUserRole($idU, $role->idR);


        header("location:$base?page=ajoutRoleUtilisateur&id=$idU&ok=$ok");
    }
//////On ajoute un role, dans la liste des role
    if(isset($_POST['ajouterRole']))
    {
        extract($_POST);
        $role = getRole($libeR);
        $role= mysqli_fetch_object($role);

        $ok=0;
        if($role->idR == null)
        {
            $ok = addRole($libeR);
            header("location:$base?page=ajoutRoleUtilisateur&ok=$ok");
        }
        else
        {
            header("location:$base?page=ajoutRoleUtilisateur&ok=$ok");
        }

    }
    if(isset($_POST['ajouterRole']))
    {
        extract($_POST);
        $role = getRole($libeR);
        if($role != null)
        {
            $ok = addRole($libeR);
            header("location:$base?page=BaseRole&ok=$ok");
        }
        else
        {
            header("location:$base?page=BaseRole&Role=$libeR");
        }

    }

    if(isset($_POST['modifier']))
    {
        extract($_POST);
        $ok = updateRole($id, $libeR);
        echo 'valeur ok= '.$ok;
       header("location:$base?page=listeDeLesRoles&ok=$ok");
    }

    if(isset($_GET['idDellete']))
    {
        delleteRole($_GET[idDellete]);

        header("location:$base?page=listeDeLesRoles");
    }

    if(isset($_POST['rechercher']))
    {
        extract($_POST);
        $listeRole = searchRole($libReche);
      //  echo 'valeur recherche= '.$lieteRole;
        if($listeRole !=null)
        {
            header("location:$base?page=rechercherRoles&val=$listeRole");
        }
        else
        {
            $ok=0;
           echo 'ici pas dans null';
           // header("location:$base?page=rechercherRoles&ok=$ok");
        }

    }
