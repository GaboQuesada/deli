$(document).ready(function () {

   
    $("#newcashbox").submit(function (e) {
        e.preventDefault();


        var datos = new FormData(document.getElementById("newcashbox"));


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


            },
            error: function () {

                alert("Error del servidor ert");
            }
        });

    });


});
