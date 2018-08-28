
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

            <input type="button" id="hola" value="hola" class="btn btn-primary btn-block">

        </form>
        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/animation/js/animation.js" ></script>
        <script src="../lib/alertifyjs/js/alertify.js" ></script>
        <script src="../comps/js/showinfo.js" ></script>
        <script src="../comps/js/validaciones.js" ></script>
        <script src="controler/prood.js"></script>
    </body>
</html>
