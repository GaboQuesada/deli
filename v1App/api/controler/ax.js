


function crtInsert(params,callback) {


    var datos = new FormData(params["objfrm"]);
    datos.append("prm", serialize(params["params"]));
    datos.append("pan", params["pambd"]);
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

            var resultado = null;
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








