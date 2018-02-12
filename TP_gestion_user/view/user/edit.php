<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Modifier un utilisateur</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Modification d'un utilisateur
                </div>
                <div class="panel panel-body">
                    <form method="post" action="controller/UserController.php">

                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control" type="text" name="nom" value="<?php echo ' '.$util->nom; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input class="form-control" type="text" name="prenom" value="<?php echo ' '.$util->prenom; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Login</label>
                            <input class="form-control" type="text" name="login" value="<?php echo ' '.$util->login; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">PassWord</label>
                            <input class="form-control" type="text" name="password" value="<?php echo ' '.$util->password; ?>"/>
                            <input class="form-control" type="hidden" name="mat" value="<?php echo ' '.$util->idU; ?>">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="modifier" value="Modifier" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>