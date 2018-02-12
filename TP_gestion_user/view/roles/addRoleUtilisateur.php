<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajout d'un role</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
    <?php
        if($_GET['ok'])
        {
            if($_GET['ok'] == 1)
            {
                echo "<div class='alert alert-success' style='text-align: center'>Donnees ajouter avec succees</div>";
            }
            else
            {
                echo "<div class='alert alert-danger' style='text-align: center'>Erreur, veuillez revoir ...</div>";
            }
        }


    ?>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    AJout d'un role pour un utilisateur
                </div>
                <div class="panel-body">
                    <form method="post" action="controller/RolesController.php">
                        
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control" type="text" name="nom" value="<?php echo ' '.$user->nom; ?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input class="form-control" type="text" name="prenom" value="<?php echo ' '.$user->prenom; ?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Login</label>
                            <input class="form-control" type="text" name="login" value="<?php echo ' '.$user->login; ?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Libelle role</label>
                            <?php
                                echo "<select name='libR'>";
                            echo "<option class='form-control'>         </option>";
                                /*while($role= mysqli_fetch_object($liste))
                                {
                                    echo "<option value='".$role->libeR."'>".$role->libeR."</option>";
                                }
                                echo "</select>";*/

                            //////////////CES INSTRUCTIONS PERMETTENT,
                            //////////// DE CHARGER LES ROLES PAS ENCORE ASSOCIEES,
                            /////////// POUR CHAQUE UTILISATEUR SELECTIONNER/////////
                                $i = 1;
                                $cpt = 0;
                                while($role1 = mysqli_fetch_object($listeRU))
                                {
                                   $tabRU[$i] = $role1->idR;
                                    $cpt= $cpt + 1;
                                    $i++;
                                }
                                 $i=1;
                                 $cpt2 = 0;
                                while($role = mysqli_fetch_object($listesR))
                                {
                                    //on met la liste dans un tableau contenant l id et le libelle du role
                                    $tabRole[$i][0] = $role->idR;
                                    $tabRole[$i][1] = $role->libeR;
                                    $cpt2 = $cpt2 +1;
                                    $i++;
                                }
                            //////// SI CPT EGAL A 0, L UTILISATEUR N EST ASSOCIEE A AUCUNE ROLE/////////////////
                                if($cpt == 0)
                                {
                                    for($i = 0; $i < $cpt2 ; $i++)
                                    {
                                        echo "<option value='".$tabRole[$i][1]."'>".$tabRole[$i][1]."</option>";
                                    }
                                }
                                else
                                {
                                    for($i=0; $i<$cpt2; $i++)
                                    {
                                        $ok = 0;
                                        for($j=0; $j<$cpt; $j++)
                                        {
                                            if( $tabRole[($i)][0] == $tabRU[($j)] )
                                            {
                                                $ok = 1;
                                                break;
                                            }
                                        }
                                        if( $ok == 0)
                                        {
                                            echo "<option value='".$tabRole[($i)][1]."'>".$tabRole[($i)][1]."</option>";
                                        }
                                    }
                                }

                            ?>

                            <input class="hidden" name="idU" value="<?php echo ' '.$user->idU; ?>"/>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="ajouterRoleUtilisateur" value="AJOUTER"/>
                        </div>
                        <div class="form-group">
                            <a href="?page=listeRole" >Retourner</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


