<?php

    require_once '../TP_gestion_user/model/DB.php';
    require_once '../TP_gestion_user/model/RolesDB.php';
    require_once '../TP_gestion_user/model/UserDB.php';
    require_once '../TP_gestion_user/model/Roles_UserDB.php';
    require_once 'menu.php';

    if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
            case 'ajoutRoleUtilisateur':
                  $user = getUserById($_GET['id']);
                  $user = mysqli_fetch_object($user);
                  ///Role que l utilisateur a deja
                  $listeRU = listeRoleDunUser($_GET['id']);
                  //liste de toutes les roles
                  $listesR = listeRole();
                require_once 'view/roles/addRoleUtilisateur.php';
                break;
            case 'ajoutRole':

                require_once 'view/roles/add.php';
                break;
            case 'editRole':
                $roles = getRoleById($_GET['id']);
                $role = mysqli_fetch_object($roles);
                require_once 'view/roles/edit.php';
                break;
            case 'listeRole':
                $listes = listeUser();
                require_once 'view/roles/liste.php';
                break;
            case 'listeDeLesRoles':
                $listes = listeRole();
                require_once 'view/roles/ListeDesRoles.php';
                break;
            case 'ajoutUser':

                require_once 'view/user/add.php';
                break;
            case 'listeUser':
                $listeU = listeUser();
                require_once 'view/user/liste.php';
                break;
            case 'modifierUser':
                 $utils = getUserById($_GET['id']);
                 $util = mysqli_fetch_object($utils);
                require_once 'view/user/edit.php';
                break;
            case 'rechercherRoles':
                if(isset($_GET['ok']))
                {
                    $etat = 0;
                    $message = 'Aucune resultat pour cette resultat';
                }
                if(isset($_GET['val']))
                {
                    $etat = 1;
                    $val= $_GET['val'];
                }
                require_once 'view/roles/searchRole.php';
                break;
            default:
                require_once 'menu.php';
        }
    }
    else
    {
        require_once 'menu.php';
    }