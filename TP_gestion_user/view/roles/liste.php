<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> Ajout de role</title>
    <link rel="stylsheet" href="public/bootstrap-cerulean.min.css">
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Ajout de role
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <div>
                    <tr>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Login</td>
                        <td>Action</td>
                    </tr>
                </div>
                <div>
                    <?php
                    while($user = mysqli_fetch_object($listes))
                    {
                        echo "<tr>
                                                <td>".$user->nom."</td>
                                                <td>".$user->prenom."</td>
                                                <td>".$user->login."</td>
                                                <td><a href='?page=ajoutRoleUtilisateur&id=$user->idU'>Ajouter un role</a></td>
                                          </tr>";
                    }
                    ?>
                </div>
            </table>
        </div>
    </div>
</div>
</body>
</html>