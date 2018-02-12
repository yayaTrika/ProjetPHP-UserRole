<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Edition de role</div>
                <div class="panel-body">
                    <form method="post" action="controller/RolesController.php">
                        <div class="form-group">
                            <label class="control-label"> Libelle role</label>
                            <input class="form-control" type="text" name="libeR" value="<?php echo " ".$role->libeR; ?>" />
                            <input class="form-control" type="hidden" name="id" value="<?php echo " ".$role->idR; ?>" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
                        </div>
                                    </form>

                </div>
            </div>
        </div>
    </body>
</html>