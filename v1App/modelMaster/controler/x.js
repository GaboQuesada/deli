


$(document).ready(function () {


    $("#newcashbox").submit(function (e) {
        e.preventDefault();

        var datos = new FormData(document.getElementById("newcashbox"));
        datos.append("vrs", "2x");
        datos.append("pc", "mipc");
        $.ajax({
            url: "model/x.php",
            type: "POST",
            data: datos,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {

            },
            success: function (r) {

                $("#res").append("JSON devuelto \n");
                $("#res").append(JSON.stringify(r) + "\n");
                $("#res").append("Obteniendo el estado \n");
                $("#res").append(r.estado + "\n");
                $("#res").append("Obteniendo el nombre \n");
                $("#res").append(r.datos[0].nombre + "\n");
                $("#res").append("Obteniendo el segundo apellido \n");
                $("#res").append(r.datos[0].apellidos[1] + "\n");
                $("#res").append("Obteniendo la edad \n");
                $("#res").append(r.datos[1].edad + "\n");
                $("#res").append("Obteniendo el dia \n");
                $("#res").append(r.datos[1].data.dn + "\n");
                $("#res").append("Obteniendo la bar de datos de manera directa \n");
                $("#res").append(r.datos[2][1] + "\n");
                $("#res").append("Obteniendo la las variables  \n");
                var datosrespuesta = r.datos[2];
                $.each(datosrespuesta, function (i, item) {
                    $("#res").append(datosrespuesta[i] + " -  ");
                });
                $("#res").append(" \n Obteniendo variable post vrs  \n");
                $("#res").append(r.datos[3].vrs + "\n");

            },
            error: function () {

                alert("Error del servidor ert");
            }
        });


    });


});



