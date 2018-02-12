<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Ajout un utilisateur
                </div>
                <div class="panel-body">
                    <form method="post" action="controller/UserController.php">
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control" type="text" name="nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input class="form-control" type="text" name="prenom" required="required" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Login</label>
                            <input class="form-control" type="text" name="login" required="required" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">PassWord</label>
                            <input class="form-control" type="password" name="password1" required="required" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Veuillez retaper le passWord</label>
                            <input class="form-control" type="password" name="password2" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="valider" value="Valider" />
                            <input class="btn btn-danger" type="submit" name="annuler" value="Annuler" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>