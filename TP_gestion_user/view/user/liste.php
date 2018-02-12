<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Liste des utilisateurs </title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Listes des utilisateurs
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-responsive table-striped">
                        <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Login</td>
                            <td>PassWord</td>
                            <td>Action</td>
                        </tr>

                        <?php
                            while($util = mysqli_fetch_object($listeU))
                            {
                                echo "<tr>
                                        <td>".$util->nom."</td>
                                        <td>".$util->prenom."</td>
                                        <td>".$util->login."</td>
                                        <td>".$util->password."</td>
                                        <td><a href='?page=modifierUser&id=$util->idU'>Modifier</a></td>
                                    </tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>