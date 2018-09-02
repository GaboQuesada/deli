

$("#btnEnviarC").click(function () {

    var ddatos = {
        go:"insert",
        check:"off",
        filep: "off",
        params: new Array('pnb','pap'),
        objfrm: document.getElementById("newcashbox"),
        pambd:"pruebaInsertnb"};

    crtInsert(
            ddatos,
            function (resultado) {
                $("#res").append(JSON.stringify(resultado) + "\n");



            });

})