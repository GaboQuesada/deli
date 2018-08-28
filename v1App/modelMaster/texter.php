
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Localidades</title>
          <?php include '../comps/compscss.php'; ?>
    </head>
    <body>
        <form enctype="multipart/form-data" method="post" name="newcashbox">
            <div class="form-group">
                <label for="disabledTextInput">Foto perfil</label>
                <input type="file" id="pimu" name="pimu"  class="form-control" >
            </div>
            <div class="form-group">

                <input type="text" id="pnus" name="pnus" class="form-control" placeholder="Usuario" >
            </div>
            <div class="form-group">

                <input type="text" id="pnupa" name="pnupa" class="form-control" placeholder="Contraseña" >
            </div>
            <div class="form-group">

                <input type="text" id="pnuc" name="pnuc" class="form-control" placeholder="Check" >
            </div>
            <button type="submit" class="btn btn-primary btn-block">Agregar</button>

        </form>
         <?php include '../comps/compsjs.php'; ?>
        <script src="controler/prood.js"></script>
    </body>
</html>
