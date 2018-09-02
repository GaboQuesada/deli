
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Localidades</title>
        <?php include '../comps/compscss.php'; ?>
    </head>
    <body>
        <div class="container">

            <form enctype="multipart/form-data" method="post" name="newcashbox" id="newcashbox">
                <div class="form-group">
                    <label for="disabledTextInput">Foto perfil</label>
                    <input type="file" id="pimu" name="pimu"  class="form-control" >
                </div>
                <div class="form-group">

                    <input type="text" id="pnb" name="pnb" class="form-control" placeholder="nombre" >
                </div>
                
                <div class="form-group">

                    <input type="text" id="pap" name="pap" class="form-control" placeholder="Apellido" >
                </div>

                <button type="button" id="btnEnviarC" class="btn btn-primary btn-block">Agregar</button>

            </form>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Resultados</label>
                <textarea class="form-control" id="res" rows="20"></textarea>
            </div>
        </div>
        <?php include '../comps/compsjs.php'; ?>
        <script src="../api/js/serializeArray.js"></script>
        <script src="../api/controler/ax.js"></script>
        <script src="controler/a.js"></script>
    </body>
</html>
