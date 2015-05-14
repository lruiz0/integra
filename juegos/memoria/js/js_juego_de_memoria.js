var idImg = "";
var imgAbierta = "";
var count = 0;
var found = 0;
var timerId = 0;

$(document).ready(function() {
    $("img").hide();
    $("#imagenes div").click(abrirImagen);
    mezclar();
    contadorTiempo();


    function abrirImagen() {
        id = $(this).attr("id");
        if ($("#"+id+" img").is(":hidden")) {
            $("#imagenes div").unbind("click", abrirImagen);
            $("#"+id+" img").slideDown('fast');

            if (imgAbierta == "") {
                idImg = id;
                imgAbierta = $("#"+id+" img").attr("src");
                setTimeout(function() {
                    $("#imagenes div").bind("click", abrirImagen)
                }, 300);
            } else {
                actual = $("#"+id+" img").attr("src");
                if (imgAbierta != actual) {
                    // Cerrar abiertas
                    setTimeout(function() {
                        $("#"+id+" img").slideUp('fast');
                        $("#"+idImg+" img").slideUp('fast');
                        idImg = "";
                        imgAbierta = "";
                    }, 400);
                } else {
                    // Coinciden!!
                    $("#"+id+" img").addClass("opacity");
                    $("#"+idImg+" img").addClass("opacity");
                    found++;
                    idImg = "";
                    imgAbierta = "";
                }

                setTimeout(function() {
                    $("#imagenes div").bind("click", abrirImagen)
                }, 400);
            }
            count++;
            $("#contador").html("" + count);

            if (found == 10) {
                msg = '<span id="msg1">Has finalizado el juego en </span>';
                $("#msgContador").prepend(msg);
                msg = '<span id="msg2">Has finalizado el juego en </span>';
                $("#msgTimer").prepend(msg);
            }
        }
    }
});

function contadorTiempo()
{
    var timer = $("#timer").html();
    timer++;
    $("#timer").html("" + timer);
    if (found<10)
    {
        timerId = setTimeout('contadorTiempo()', 1000);
    }
}

function reiniciarJuego() {
    mezclar();
    $("img").hide();
    $("img").removeClass("opacity");
    count = 0;
    $("#msg1").remove();
    $("#msg2").remove();
    $("#contador").html("" + count);
    idImg = "";
    imgAbierta = "";
    found = 0;
    $("#timer").html("0");
    clearTimeout(timerId);
    contadorTiempo();
    return false;
}


function randomDeHasta(de, hasta){

    return Math.floor(Math.random() * (hasta - de + 1) + de);

}

function mezclar() {

    var imagenes = $("#imagenes").children();

    var imagen = $("#imagenes div:first-child");

    var array_img = new Array();

    for (i=0; i<imagenes.length; i++) {

        array_img[i] = $("#"+imagen.attr("id")+" img").attr("src");

        imagen = imagen.next();

    }

    var imagen = $("#imagenes div:first-child");

    for (z=0; z<imagenes.length; z++) {

        randIndex = randomDeHasta(0, array_img.length - 1);


        $("#"+imagen.attr("id")+" img").attr("src", array_img[randIndex]);

        array_img.splice(randIndex, 1);

        imagen = imagen.next();

    }
}