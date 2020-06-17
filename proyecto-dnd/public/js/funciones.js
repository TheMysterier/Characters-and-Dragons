function calcularStats(stat) {
    switch($('input[name = stat' + stat + ']').val()) {
        case "1":
            $('input[name = mod' + stat + ']').val("-5");
            break;
        case "2":
            $('input[name = mod' + stat + ']').val("-4");
            break;
        case "3":
            $('input[name = mod' + stat + ']').val("-4");
            break;
        case "4":
            $('input[name = mod' + stat + ']').val("-3");
            break;
        case "5":
            $('input[name = mod' + stat + ']').val("-3");
            break;
        case "6":
            $('input[name = mod' + stat + ']').val("-2");
            break;
        case "7":
            $('input[name = mod' + stat + ']').val("-2");
            break;
        case "8":
            $('input[name = mod' + stat + ']').val("-1");
            break;
        case "9":
            $('input[name = mod' + stat + ']').val("-1");
            break;
        case "10":
            $('input[name = mod' + stat + ']').val("0");
            break;
        case "11":
            $('input[name = mod' + stat + ']').val("0");
            break;
        case "12":
            $('input[name = mod' + stat + ']').val("+1");
            break;
        case "13":
            $('input[name = mod' + stat + ']').val("+1");
            break;
        case "14":
            $('input[name = mod' + stat + ']').val("+2");
            break;
        case "15":
            $('input[name = mod' + stat + ']').val("+2");
            break;
        case "16":
            $('input[name = mod' + stat + ']').val("+3");
            break;
        case "17":
            $('input[name = mod' + stat + ']').val("+3");
            break;
        case "18":
            $('input[name = mod' + stat + ']').val("+4");
            break;
        case "19":
            $('input[name = mod' + stat + ']').val("+4");
            break;
        case "20":
            $('input[name = mod' + stat + ']').val("+5");
            break;
        case "21":
            $('input[name = mod' + stat + ']').val("+5");
            break;
        case "22":
            $('input[name = mod' + stat + ']').val("+6");
            break;
        case "23":
            $('input[name = mod' + stat + ']').val("+6");
            break;
        case "24":
            $('input[name = mod' + stat + ']').val("+7");
            break;
        case "25":
            $('input[name = mod' + stat + ']').val("+7");
            break;
        case "26":
            $('input[name = mod' + stat + ']').val("+8");
            break;
        case "27":
            $('input[name = mod' + stat + ']').val("+8");
            break;
        case "28":
            $('input[name = mod' + stat + ']').val("+9");
            break;
        case "29":
            $('input[name = mod' + stat + ']').val("+9");
            break;
        case "30":
            $('input[name = mod' + stat + ']').val("+10");
            break;
    }
}

function resetStats() {
    $("input[name = statFue]").val("10");
    $("input[name = statDes]").val("10");
    $("input[name = statCon]").val("10");
    $("input[name = statInt]").val("10");
    $("input[name = statSab]").val("10");
    $("input[name = statCar]").val("10");
}

function raza() {
    $( "#raza" ).change(function() {
        switch($( "#raza option:selected" ).val()) {
            case "1":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 2;
                var carisma = parseInt($("input[name = statCar]").val()) + 1;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statCar]").val(carisma);
                $("input[name = velocidad]").val(30);
                break;

            case "2":
                resetStats();
                var constitucion = parseInt($("input[name = statCon]").val()) + 2;
                $("input[name = statCon]").val(constitucion);
                $("input[name = velocidad]").val(25);
                break;

            case "3":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 2;
                $("input[name = statDes]").val(destreza);
                $("input[name = velocidad]").val(30);
                break;

            case "4":
                resetStats();
                var inteligencia = parseInt($("input[name = statInt]").val()) + 2;
                $("input[name = statInt]").val(inteligencia);
                $("input[name = velocidad]").val(25);
                break;

            case "5":
                resetStats();
                var carisma = parseInt($("input[name = statCar]").val()) + 2;
                $("input[name = statCar]").val(carisma);
                $("input[name = velocidad]").val(30);
                alert("Puedes aumentar en 1 un stat que prefieras.");
                break;

            case "6":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 2;
                $("input[name = statDes]").val(destreza);
                $("input[name = velocidad]").val(25);
                break;

            case "7":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 2;
                var constitucion = parseInt($("input[name = statCon]").val()) + 1;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statCon]").val(constitucion);
                $("input[name = velocidad]").val(30);
                break;
            
            case "8":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 1;
                var destreza = parseInt($("input[name = statDes]").val()) + 1;
                var constitucion = parseInt($("input[name = statCon]").val()) + 1;
                var inteligencia = parseInt($("input[name = statInt]").val()) + 1;
                var sabiduria = parseInt($("input[name = statSab]").val()) + 1;
                var carisma = parseInt($("input[name = statCar]").val()) + 1;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statDes]").val(destreza);
                $("input[name = statCon]").val(constitucion);
                $("input[name = statInt]").val(inteligencia);
                $("input[name = statSab]").val(sabiduria);
                $("input[name = statCar]").val(carisma);
                $("input[name = velocidad]").val(30);
                break;

            case "9":
                resetStats();
                var carisma = parseInt($("input[name = statCar]").val()) + 2;
                var inteligencia = parseInt($("input[name = statInt]").val()) + 1;
                $("input[name = statCar]").val(carisma);
                $("input[name = statInt]").val(inteligencia);
                $("input[name = velocidad]").val(30);
                break;
                
            case "10":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 2;
                var sabiduria = parseInt($("input[name = statSab]").val()) + 1;
                $("input[name = statDes]").val(destreza);
                $("input[name = statSab]").val(sabiduria);
                $("input[name = velocidad]").val(25);
                break;
            
            case "11":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 1;
                var constitucion = parseInt($("input[name = statCon]").val()) + 2;
                $("input[name = statDes]").val(destreza);
                $("input[name = statCon]").val(constitucion);
                $("input[name = velocidad]").val(30);
                break;

            case "12":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 1;
                var constitucion = parseInt($("input[name = statCon]").val()) + 2;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statCon]").val(constitucion);
                $("input[name = velocidad]").val(30);
                break;

            case "13":
                resetStats();
                var constitucion = parseInt($("input[name = statCon]").val()) + 2;
                var inteligencia = parseInt($("input[name = statInt]").val()) + 1;
                $("input[name = statCon]").val(constitucion);
                $("input[name = statInt]").val(inteligencia);
                $("input[name = velocidad]").val(30);
                break;

            case "14":
                resetStats();
                var constitucion = parseInt($("input[name = statCon]").val()) + 2;
                var sabiduria = parseInt($("input[name = statSab]").val()) + 1;
                $("input[name = statCon]").val(constitucion);
                $("input[name = statSab]").val(sabiduria);
                $("input[name = velocidad]").val(30);
                break;

            case "15":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 2;
                var constitucion = parseInt($("input[name = statCon]").val()) + 1;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statCon]").val(constitucion);
                $("input[name = velocidad]").val(30);
                break;

            case "16":
                resetStats();
                var sabiduria = parseInt($("input[name = statSab]").val()) + 1;
                var carisma = parseInt($("input[name = statCar]").val()) + 2;
                $("input[name = statSab]").val(sabiduria);
                $("input[name = statCar]").val(carisma);
                $("input[name = velocidad]").val(30);
                break;

            case "17":
                resetStats();
                var constitucion = parseInt($("input[name = statCon]").val()) + 1;
                var carisma = parseInt($("input[name = statCar]").val()) + 2;
                $("input[name = statCon]").val(constitucion);
                $("input[name = statCar]").val(carisma);
                $("input[name = velocidad]").val(30);
                break;

            case "18":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 1;
                var carisma = parseInt($("input[name = statCar]").val()) + 2;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statCar]").val(carisma);
                $("input[name = velocidad]").val(30);
                break;

            case "19":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 2;
                var destreza = parseInt($("input[name = statDes]").val()) + 1;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statDes]").val(destreza);
                $("input[name = velocidad]").val(30);
                break;

            case "20":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 1;
                var sabiduria = parseInt($("input[name = statSab]").val()) + 2;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statSab]").val(sabiduria);
                $("input[name = velocidad]").val(30);
                break;

            case "21":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 2;
                var constitucion = parseInt($("input[name = statCon]").val()) + 1;
                $("input[name = statDes]").val(destreza);
                $("input[name = statCon]").val(constitucion);
                $("input[name = velocidad]").val(30);
                break;

            case "22":
                resetStats();
                var constitucion = parseInt($("input[name = statCon]").val()) + 2;
                var inteligencia = parseInt($("input[name = statInt]").val()) + 1;
                $("input[name = statCon]").val(constitucion);
                $("input[name = statInt]").val(inteligencia);
                $("input[name = velocidad]").val(30);
                break;
            
            case "23":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 2;
                var sabiduria = parseInt($("input[name = statSab]").val()) + 1;
                $("input[name = statDes]").val(destreza);
                $("input[name = statSab]").val(sabiduria);
                $("input[name = velocidad]").val(30);
                break;

            case "24":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 2;
                var fuerza = parseInt($("input[name = statFue]").val()) - 2;
                $("input[name = statDes]").val(destreza);
                $("input[name = statFue]").val(fuerza);
                $("input[name = velocidad]").val(30);
                break;

            case "25":
                resetStats();
                var constitucion = parseInt($("input[name = statCon]").val()) + 2;
                var sabiduria = parseInt($("input[name = statSab]").val()) + 1;
                $("input[name = statCon]").val(constitucion);
                $("input[name = statSab]").val(sabiduria);
                $("input[name = velocidad]").val(30);
                break;

            case "26":
                resetStats();
                var fuerza = parseInt($("input[name = statFue]").val()) + 2;
                var constitucion = parseInt($("input[name = statCon]").val()) + 1;
                var inteligencia = parseInt($("input[name = statInt]").val()) - 2;
                $("input[name = statFue]").val(fuerza);
                $("input[name = statCon]").val(constitucion);
                $("input[name = statInt]").val(inteligencia);
                $("input[name = velocidad]").val(30);
                break;

            case "27":
                resetStats();
                var destreza = parseInt($("input[name = statDes]").val()) + 2;
                var carisma = parseInt($("input[name = statCar]").val()) + 1;
                $("input[name = statDes]").val(destreza);
                $("input[name = statCar]").val(carisma);
                $("input[name = velocidad]").val(30);
                break;
        }
    });
    
}

function nivel() {
    switch($( "#nivel option:selected" ).text()) {
        case "1":
            $("input[name = competencia]").val("2");
            $('#exp').attr('aria-valuemin',0);
            $('#exp').attr('aria-valuemax',300);
            $('#expInicial').text('0');
            $('#expFinal').text('300');
            $('#exp').attr('style','width: 0%');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 1);
            $('#sumarExp').val("");
            break;
        case "2":
            $("input[name = competencia]").val("2");
            $('#exp').attr('aria-valuemin',300);
            $('#exp').attr('aria-valuemax',900);
            $('#expInicial').text('300');
            $('#expFinal').text('900');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 2);
            $('#sumarExp').val("");
            break;
        case "3":
            $("input[name = competencia]").val("2");
            $('#exp').attr('aria-valuemin',900);
            $('#exp').attr('aria-valuemax',2700);
            $('#expInicial').text('900');
            $('#expFinal').text('2700');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 3);
            $('#sumarExp').val("");
            break;
        case "4":
            $("input[name = competencia]").val("2");
            $('#exp').attr('aria-valuemin',2700);
            $('#exp').attr('aria-valuemax',6500);
            $('#expInicial').text('2700');
            $('#expFinal').text('6500');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 4);
            $('#sumarExp').val("");
            break;
        case "5":
            $("input[name = competencia]").val("3");
            $('#exp').attr('aria-valuemin',6500);
            $('#exp').attr('aria-valuemax',14000);
            $('#expInicial').text('6500');
            $('#expFinal').text('14000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 5);
            $('#sumarExp').val("");
            break;
        case "6":
            $("input[name = competencia]").val("3");
            $('#exp').attr('aria-valuemin',14000);
            $('#exp').attr('aria-valuemax',23000);
            $('#expInicial').text('14000');
            $('#expFinal').text('23000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 6);
            $('#sumarExp').val("");
            break;
        case "7":
            $("input[name = competencia]").val("3");
            $('#exp').attr('aria-valuemin',23000);
            $('#exp').attr('aria-valuemax',34000);
            $('#expInicial').text('23000');
            $('#expFinal').text('34000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 7);
            $('#sumarExp').val("");
            break;
        case "8":
            $("input[name = competencia]").val("3");
            $('#exp').attr('aria-valuemin',34000);
            $('#exp').attr('aria-valuemax',48000);
            $('#expInicial').text('34000');
            $('#expFinal').text('48000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 8);
            $('#sumarExp').val("");
            break;
        case "9":
            $("input[name = competencia]").val("4");
            $('#exp').attr('aria-valuemin',48000);
            $('#exp').attr('aria-valuemax',64000);
            $('#expInicial').text('48000');
            $('#expFinal').text('64000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 9);
            $('#sumarExp').val("");
            break;
        case "10":
            $("input[name = competencia]").val("4");
            $('#exp').attr('aria-valuemin',64000);
            $('#exp').attr('aria-valuemax',192000);
            $('#expInicial').text('64000');
            $('#expFinal').text('192000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 10);
            $('#sumarExp').val("");
            break;
        case "11":
            $("input[name = competencia]").val("4");
            $('#exp').attr('aria-valuemin',192000);
            $('#exp').attr('aria-valuemax',576000);
            $('#expInicial').text('192000');
            $('#expFinal').text('576000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 11);
            $('#sumarExp').val("");
            break;
        case "12":
            $("input[name = competencia]").val("4");
            $('#exp').attr('aria-valuemin',576000);
            $('#exp').attr('aria-valuemax',1728000);
            $('#expInicial').text('576000');
            $('#expFinal').text('1728000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 12);
            $('#sumarExp').val("");
            break;
        case "13":
            $("input[name = competencia]").val("5");
            $('#exp').attr('aria-valuemin',1728000);
            $('#exp').attr('aria-valuemax',5184000);
            $('#expInicial').text('1728000');
            $('#expFinal').text('5184000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 13);
            $('#sumarExp').val("");
            break;
        case "14":
            $("input[name = competencia]").val("5");
            $('#exp').attr('aria-valuemin',5184000);
            $('#exp').attr('aria-valuemax',15552000);
            $('#expInicial').text('5184000');
            $('#expFinal').text('15552000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 14);
            $('#sumarExp').val("");
            break;
        case "15":
            $("input[name = competencia]").val("5");
            $('#exp').attr('aria-valuemin',15552000);
            $('#exp').attr('aria-valuemax',46656000);
            $('#expInicial').text('15552000');
            $('#expFinal').text('46656000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 15);
            $('#sumarExp').val("");
            break;
        case "16":
            $("input[name = competencia]").val("5");
            $('#exp').attr('aria-valuemin',46656000);
            $('#exp').attr('aria-valuemax',139968000);
            $('#expInicial').text('46656000');
            $('#expFinal').text('139968000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 16);
            $('#sumarExp').val("");
            break;
        case "17":
            $("input[name = competencia]").val("6");
            $('#exp').attr('aria-valuemin',139968000);
            $('#exp').attr('aria-valuemax',419904000);
            $('#expInicial').text('139968000');
            $('#expFinal').text('419904000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 17);
            $('#sumarExp').val("");
            break;
        case "18":
            $("input[name = competencia]").val("6");
            $('#exp').attr('aria-valuemin',419904000);
            $('#exp').attr('aria-valuemax',1259712000);
            $('#expInicial').text('419904000');
            $('#expFinal').text('1259712000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 18);
            $('#sumarExp').val("");
            break;
        case "19":
            $("input[name = competencia]").val("6");
            $('#exp').attr('aria-valuemin',1259712000);
            $('#exp').attr('aria-valuemax',3779136000);
            $('#expInicial').text('1259712000');
            $('#expFinal').text('3779136000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 19);
            $('#sumarExp').val("");
            break;
        case "20":
            $("input[name = competencia]").val("6");
            $('#exp').attr('aria-valuemin',1259712000);
            $('#exp').attr('aria-valuemax',3779136000);
            $('#exp').attr('style','width: 100%');
            $('#exp').text("3779136000");
            $('#expInicial').text('1259712000');
            $('#expFinal').text('3779136000');
            calcularExp($('input[name = cantEXP]').val() != "" ? parseInt($('input[name = cantEXP]').val()) : 0, 20);
            $('#sumarExp').val("");
            break;
    }
}

function calcularExp(num, level) {
    var limits = [0, 300, 900, 2700, 6500, 14000, 23000, 34000, 48000, 64000, 192000, 576000, 1728000, 5184000, 15552000, 
        46656000, 139968000, 419904000, 1259712000, 3779136000];
    var suma = num + parseInt($('#exp').text());

    if(suma > limits[limits.length - 1]) {
        $('#exp').attr('style','width: 100%');
    } else {
        while(suma >= limits[level]) {
            level += 1;
            $('#nivel').val(level);
        }
        
        var porcentaje = ((suma - limits[level - 1]) / (limits[level] - limits[level - 1])) * 100;

        $('#exp').attr('style','width: ' + parseInt(porcentaje) + '%');
        $('#exp').text(suma);
        $("input[name = expTotal]").val(suma);
    }
}

function descheckear() {
    $('input[name = saveFue]').attr('checked', false);
    $('input[name = saveDes]').attr('checked', false);
    $('input[name = saveCon]').attr('checked', false);
    $('input[name = saveInt]').attr('checked', false);
    $('input[name = saveSab]').attr('checked', false);
    $('input[name = saveCar]').attr('checked', false);
}

function clase() {
    switch($( "#clase option:selected" ).val()) {
        case "1":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Guerrero").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Bárbaro" + i).hide();
                
                if($(".Bárbaro" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Bárbaro" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Bárbaro" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Bárbaro" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Bárbaro" + i + "oCompetencias").show();
                    $(".Bárbaro" + i + "cYRasgos").show();
                    $(".Bárbaro" + i + "dGolpe").show();
                    $(".Bárbaro" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Bárbaro" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveFue]').attr('checked', true);
            $('input[name = saveCon]').attr('checked', true);
            break;
        
        case "2":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Guerrero").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Bardo" + i).hide();
                
                if($(".Bardo" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Bardo" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Bardo" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Bardo" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Bardo" + i + "oCompetencias").show();
                    $(".Bardo" + i + "cYRasgos").show();
                    $(".Bardo" + i + "dGolpe").show();
                    $(".Bardo" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Bardo" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveDes]').attr('checked', true);
            $('input[name = saveCar]').attr('checked', true);
            break;
        
        case "3":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Druida").hide();
            $(".Guerrero").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Clérigo" + i).hide();
                
                if($(".Clérigo" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Clérigo" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Clérigo" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Clérigo" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Clérigo" + i + "oCompetencias").show();
                    $(".Clérigo" + i + "cYRasgos").show();
                    $(".Clérigo" + i + "dGolpe").show();
                    $(".Clérigo" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Clérigo" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveSab]').attr('checked', true);
            $('input[name = saveCar]').attr('checked', true);
            break;
        
        case "4":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Guerrero").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Druida" + i).hide();
                
                if($(".Druida" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Druida" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Druida" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Druida" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Druida" + i + "oCompetencias").show();
                    $(".Druida" + i + "cYRasgos").show();
                    $(".Druida" + i + "dGolpe").show();
                    $(".Druida" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Druida" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveInt]').attr('checked', true);
            $('input[name = saveSab]').attr('checked', true);
            break;

        case "5":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Guerrero" + i).hide();
                
                if($(".Guerrero" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Guerrero" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Guerrero" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Guerrero" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Guerrero" + i + "oCompetencias").show();
                    $(".Guerrero" + i + "cYRasgos").show();
                    $(".Guerrero" + i + "dGolpe").show();
                    $(".Guerrero" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Guerrero" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveFue]').attr('checked', true);
            $('input[name = saveCon]').attr('checked', true);
            break;

        case "6":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Guerrero").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Monje" + i).hide();
                
                if($(".Monje" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Monje" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Monje" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Monje" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Monje" + i + "oCompetencias").show();
                    $(".Monje" + i + "cYRasgos").show();
                    $(".Monje" + i + "dGolpe").show();
                    $(".Monje" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Monje" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveFue]').attr('checked', true);
            $('input[name = saveDes]').attr('checked', true);
            break;

        case "7":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Guerrero").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Paladín" + i).hide();
                
                if($(".Paladín" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Paladín" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Paladín" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Paladín" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Paladín" + i + "oCompetencias").show();
                    $(".Paladín" + i + "cYRasgos").show();
                    $(".Paladín" + i + "dGolpe").show();
                    $(".Paladín" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Paladín" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveSab]').attr('checked', true);
            $('input[name = saveCar]').attr('checked', true);
            break;

        case "8":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Guerrero").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Explorador" + i).hide();
                
                if($(".Explorador" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Explorador" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Explorador" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Explorador" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Explorador" + i + "oCompetencias").show();
                    $(".Explorador" + i + "cYRasgos").show();
                    $(".Explorador" + i + "dGolpe").show();
                    $(".Explorador" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Explorador" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveFue]').attr('checked', true);
            $('input[name = saveDes]').attr('checked', true);
            break;

        case "9":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Guerrero").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Pícaro" + i).hide();
                
                if($(".Pícaro" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Pícaro" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Pícaro" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Pícaro" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Pícaro" + i + "oCompetencias").show();
                    $(".Pícaro" + i + "cYRasgos").show();
                    $(".Pícaro" + i + "dGolpe").show();
                    $(".Pícaro" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Pícaro" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveDes]').attr('checked', true);
            $('input[name = saveInt]').attr('checked', true);
            break;

        case "10":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Guerrero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Hechicero" + i).hide();
                
                if($(".Hechicero" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Hechicero" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Hechicero" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Hechicero" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Hechicero" + i + "oCompetencias").show();
                    $(".Hechicero" + i + "cYRasgos").show();
                    $(".Hechicero" + i + "dGolpe").show();
                    $(".Hechicero" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Hechicero" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveCar]').attr('checked', true);
            $('input[name = saveCon]').attr('checked', true);
            break;

        case "11":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Guerrero").hide();
            $(".Mago").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Brujo" + i).hide();
                
                if($(".Brujo" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Brujo" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Brujo" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Brujo" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Brujo" + i + "oCompetencias").show();
                    $(".Brujo" + i + "cYRasgos").show();
                    $(".Brujo" + i + "dGolpe").show();
                    $(".Brujo" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Brujo" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveSab]').attr('checked', true);
            $('input[name = saveCar]').attr('checked', true);
            break;

        case "12":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Guerrero").hide();
            $(".Artificiero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Mago" + i).hide();
                
                if($(".Mago" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Mago" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Mago" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Mago" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Mago" + i + "oCompetencias").show();
                    $(".Mago" + i + "cYRasgos").show();
                    $(".Mago" + i + "dGolpe").show();
                    $(".Mago" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Mago" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveInt]').attr('checked', true);
            $('input[name = saveSab]').attr('checked', true);
            break;

        case "13":
            $("#vacio").hide();
            $("#vacio2").hide();
            $(".Bardo").hide();
            $(".Bárbaro").hide();
            $(".Clérigo").hide();
            $(".Druida").hide();
            $(".Monje").hide();
            $(".Paladín").hide();
            $(".Explorador").hide();
            $(".Pícaro").hide();
            $(".Hechicero").hide();
            $(".Brujo").hide();
            $(".Mago").hide();
            $(".Guerrero").hide();

            for(var i = 1; i < 28; ++i) {
                $(".Artificiero" + i).hide();
                
                if($(".Artificiero" + i + "oCompetencias").attr("name") == "oCompetencias") {
                    $(".Artificiero" + i + "oCompetencias").attr("name", "oCompetenciasNO");
                }

                if($(".Artificiero" + i + "cYRasgos").attr("name") == "cYRasgos") {
                    $(".Artificiero" + i + "cYRasgos").attr("name", "cYRasgosNO");
                }
            }

            for(var i = 1; i < 28; ++i) {
                if(parseInt($( "#raza option:selected" ).val()) == i) {
                    $(".Artificiero" + i + "oCompetencias").show();
                    $(".Artificiero" + i + "cYRasgos").show();
                    $(".Artificiero" + i + "dGolpe").show();
                    $(".Artificiero" + i + "oCompetencias").attr("name", "oCompetencias");
                    $(".Artificiero" + i + "cYRasgos").attr("name", "cYRasgos");
                }
            }

            descheckear();
            $('input[name = saveInt]').attr('checked', true);
            $('input[name = saveCon]').attr('checked', true);
            break;
    }
}

function hechizos() {
    switch($( "#claseHechizos option:selected" ).val()) {
        case "2" || "7" || "10" || "11":
            spellAtack = parseInt($("input[name = competencia]").val()) + parseInt($('input[name = modCar]').val());
            saveDC = parseInt(8) + parseInt(spellAtack);
            $("input[name = hSpellcast]").val("Carisma");
            $("input[name = sSpellcast]").val(saveDC);
            $("input[name = bASpellcast]").val(spellAtack);
            break;
        
        case "3" || "4" || "8":
            spellAtack = parseInt($("input[name = competencia]").val()) + parseInt($('input[name = modSab]').val());
            saveDC = parseInt(8) + parseInt(spellAtack);
            $("input[name = hSpellcast]").val("Sabiduría");
            $("input[name = sSpellcast]").val(saveDC);
            $("input[name = bASpellcast]").val(spellAtack);
            break;

        case "9" || "12":
            spellAtack = parseInt($("input[name = competencia]").val()) + parseInt($('input[name = modInt]').val());
            saveDC = parseInt(8) + parseInt(spellAtack);
            $("input[name = hSpellcast]").val("Inteligencia");
            $("input[name = sSpellcast]").val(saveDC);
            $("input[name = bASpellcast]").val(spellAtack);
            break;
    }
}

function desvelarTabla() {
    switch($( "#tablasClases option:selected" ).val()) {
        case "0":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            break;
        case "1":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "2":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "3":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "4":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "5":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "6":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "7":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "8":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "9":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "10":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "11":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
        case "12":
            for(var i = 1; i < 13; ++i) {
                $("#" + i).hide();
            }

            $("#" + parseInt($( "#tablasClases option:selected" ).val())).show();
            break;
    }
}

$(document).ready(function(){
    for(var i = 1; i < 13; ++i) {
        $("#" + i).hide();
    }

    for(var i = 1; i < 28; ++i) {
        $(".Bárbaro" + i + "oCompetencias").hide();
        $(".Bárbaro" + i + "cYRasgos").hide();
        $(".Bárbaro" + i + "dGolpe").hide();
        $(".Bardo" + i + "oCompetencias").hide();
        $(".Bardo" + i + "cYRasgos").hide();
        $(".Bardo" + i + "dGolpe").hide();
        $(".Clérigo" + i + "oCompetencias").hide();
        $(".Clérigo" + i + "cYRasgos").hide();
        $(".Clérigo" + i + "dGolpe").hide();
        $(".Druida" + i + "oCompetencias").hide();
        $(".Druida" + i + "cYRasgos").hide();
        $(".Druida" + i + "dGolpe").hide();
        $(".Monje" + i + "oCompetencias").hide();
        $(".Monje" + i + "cYRasgos").hide();
        $(".Monje" + i + "dGolpe").hide();
        $(".Paladín" + i + "oCompetencias").hide();
        $(".Paladín" + i + "cYRasgos").hide();
        $(".Paladín" + i + "dGolpe").hide();
        $(".Explorador" + i + "oCompetencias").hide();
        $(".Explorador" + i + "cYRasgos").hide();
        $(".Explorador" + i + "dGolpe").hide();
        $(".Pícaro" + i + "oCompetencias").hide();
        $(".Pícaro" + i + "cYRasgos").hide();
        $(".Pícaro" + i + "dGolpe").hide();
        $(".Hechicero" + i + "oCompetencias").hide();
        $(".Hechicero" + i + "cYRasgos").hide();
        $(".Hechicero" + i + "dGolpe").hide();
        $(".Brujo" + i + "oCompetencias").hide();
        $(".Brujo" + i + "cYRasgos").hide();
        $(".Brujo" + i + "dGolpe").hide();
        $(".Mago" + i + "oCompetencias").hide();
        $(".Mago" + i + "cYRasgos").hide();
        $(".Mago" + i + "dGolpe").hide();
        $(".Guerrero" + i + "oCompetencias").hide();
        $(".Guerrero" + i + "cYRasgos").hide();
        $(".Guerrero" + i + "dGolpe").hide();
        $(".Artificiero" + i + "oCompetencias").hide();
        $(".Artificiero" + i + "cYRasgos").hide();
        $(".Artificiero" + i + "dGolpe").hide();
    }
});

$("html").click(function(evt) {
    for(i = 0; i < 6; ++i) {
        switch(i) {
            case 0:
                calcularStats("Fue");
                break;
            case 1:
                calcularStats("Des");
                break;
            case 2:
                calcularStats("Con");
                break;
            case 3:
                calcularStats("Int");
                break;
            case 4:
                calcularStats("Sab");
                break;
            case 5:
                calcularStats("Car");
                break;
        }
    }

    var iniciativa = 10 + parseInt($('input[name = modDes]').val());
    var ppasiva = 10 + parseInt($('input[name = modSab]').val());

    if($('input[name = percepcion]').is(':checked')) {
        ppasiva += parseInt($('input[name = competencia]').val());
    }

    $('input[name = iniciativa]').val(iniciativa);
    $('input[name = ppercepcion]').val(ppasiva);

    if(evt.target.id != "sumarExp") {
       nivel();
    }
    
    raza();

    clase();

    hechizos();
    
    desvelarTabla();
});