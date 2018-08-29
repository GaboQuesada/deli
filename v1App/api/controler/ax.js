


function crtInsert(formobj,params, pbda, callback) {





    var resultado = "";
    
    var datos = new FormData(formobj);
    datos.append("prm", serialize(params));
    datos.append("pan", pbda);
    $.ajax({
        url: "../api/model/a.php",
        type: "POST",
        data: datos,
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function () {

        },
        success: function (r) {


            if (r == 'undefined' || r == '') {
                resultado = "null";
            } else {
                resultado = r;
            }
            if (callback)
                callback(resultado);

        },
        error: function () {
            alert("Error del servidor ert");
        }
    });
}








