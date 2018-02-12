<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        <div class="panel panel-primary">
            <div class="container">
                <div class="panel-heading">
                    Recherche de role
                </div>
                <div class="panel-body">
                    <form method="get" action="index.php?page=rechercherRoles">
                        <div class="form-group">
                            <label class="control-label">Entrer le libelle a rechercher</label>
                            <input class="form-control" type="text" name="libReche" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="rechercher" value="Rechercher"/>
                        </div>
                    </form>
                    <table class="table table-bordered table-responsive table-striped">
                        <tr>
                            <td>Identifiant</td>
                            <td>libelle role</td>
                        </tr>
                        <?php
                            if($etat = 0)
                            {
                                echo "<tr>
                                        <td>".$message."</td>
                                        </tr>";
                            }
                            else
                            {
                                while($listeRole = mysqli_fetch_object($val))
                                {
                                    echo "<tr>
                                            <td>".$listeRole->idR."</td>
                                            <td>".$listeRole->libeR."</td>
                                        </tr>";
                                }
                            }

                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>