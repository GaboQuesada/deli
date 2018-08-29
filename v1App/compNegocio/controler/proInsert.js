
$(document).ready(function () {});

$("#btng1").click(function () {

   
    $nb = $("#pnb").val();
    $nb2 = $("#pnb2").val();
    $ce = $("#pce").val();
    $des = $("#pdes").val();
    $img = $("#pimg").val();


    if ($nb === "" || $ce === "" ) {
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'El nombre y la cédula son obligatorios ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
    }else{
        
         var datos = new FormData(document.getElementById("frmstep1"));

    $.ajax({
        url: "model/proIfExist.php",
        type: "POST",
        data: datos,
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function () {

        },
        success: function (respuesta) {

            
            if(respuesta.resultados == 0){
                  var datos = new FormData(document.getElementById("frmstep1"));

    $.ajax({
        url: "model/proInsertGeneral.php",
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

            }else{
                  alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Este proveedor ya se encuentra registrado  ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
            }

        },
        error: function () {

            alert("Error del servidor ert");
        }
    });
        
        
    }

});