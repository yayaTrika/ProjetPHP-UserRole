<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
    </head>
    <body>
        <?php
            if(isset($_GET['ok']))
            {
                if($_GET['ok'] == 1)
                {
                    echo '<div class="alert alert-success" style="text-align: center">Role ajoute avec succee</div>';
                }
                else
                {
                    echo '<div class="alert alert-danger" style="text-align: center"> Ce role existe deja </div>';
                    $ok=0;
                }
            }
        ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ajout d'une role
                </div>
                <div class="panel-body">
                    <form method="post" action="controller/RolesController.php">
                        <div class="form-group">
                            <label class="control-label" >Libelle du role</label>
                            <input class="form-control" type="text" name="libeR" required="required"/>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="ajouterRole" value="Ajouter"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>