/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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

                alert(r.estado);

            },
            error: function () {

                alert("Error del servidor ert");
            }
        });