
function crtInsert (params) {

    var datos = new FormData(document.getElementById("newcashbox"));
    datos.append("prm", serialize(params));
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
          
       $("#res").append(JSON.stringify(r) + "\n");

        },
        error: function () {
            alert("Error del servidor ert");
        }
    });
}






