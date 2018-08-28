$(document).ready(function () {

});

$("#hola").click(function () {
    var datos = new FormData(document.getElementById("newcashbox"));
    datos.append('keySes', 'on');
    datos.append('keyid', 'on');
    datos.append('files', 'on');
    datos.append('uri','');
    $.ajax({
        url: "testc.php",
        type: "POST",
        data: datos,
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function () {

        },
        success: function (respuesta) {

            alert(respuesta.estado);

        },
        error: function () {

            alert("Error del servidor ert");
        }
    });

});
