<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajouter Role</title>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Liste des roles
                </div>
                <div class="panel-body">
                   <table class="table table-responsive table-bordered table-striped">
                       <tr>
                           <td>Libelle role</td>
                           <td>Modifier role</td>
                           <td>Supprimer role</td>
                       </tr>
                       <?php
                            while($role = mysqli_fetch_object($listes))
                            {
                                echo "<tr>
                                        <td>".$role->libeR."</td>
                                        <td><a href='?page=editRole&id=$role->idR'>Modifier</a></td>
                                        <td><a href='controller/RolesController.php?idDellete=".$role->idR."'>Supprimer</a></td>
                                    </tr>";
                            }
                       ?>
                   </table>
                </div>
            </div>
        </div>
    </body>
</html>