

$("#btnEnviarC").click(function () {


    crtInsert(
            document.getElementById("newcashbox"),
            new Array('G', 'A', 'B', 'O'),
            'prueba',
            function (resultado) {


                $("#res").append(JSON.stringify(resultado) + "\n");



            });




})