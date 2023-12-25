function convertNali(valNum){
    $('#nali').html(valNum);
    $('#bigha').html(valNum * 0.3172737955346651);
    $('#gaj').html(valNum * 240);
    $('#sqmt').html(valNum * 200.67076059792456);
    $('#mutthi').html(valNum * 16);
    $('#sqft').html(valNum * 2160);
    $('#acre').html(valNum * 0.049586776859504134);
    $('#yards').html(valNum * 240);
}

function convertBigha(valNum){
    $('#nali').html(valNum * 3.151851851851852);
    $('#bigha').html(valNum);
    $('#gaj').html(valNum * 1600);
    $('#sqmt').html(valNum * 632.4845084030882);
    $('#mutthi').html(valNum * 50.42962962962963);
    $('#sqft').html(valNum * 6808);
    $('#acre').html(valNum * 0.15629017447199264);
    $('#yards').html(valNum * 1600);
}

function convertGaj(valNum){
    $('#nali').html(valNum * 0.004166666666666667);
    $('#bigha').html(valNum * 0.0013219741480611047);
    $('#gaj').html(valNum * 1);
    $('#sqmt').html(valNum * 0.836128169158019);
    $('#mutthi').html(valNum * 0.06666666666666667);
    $('#sqft').html(valNum * 9);
    $('#acre').html(valNum * 0.00020661157024793388);
    $('#yards').html(valNum * 1);
}

function convertSqMt(valNum){
    $('#nali').html(valNum * 0.004983287037037037);
    $('#bigha').html(valNum * 0.001581066392479436);
    $('#gaj').html(valNum * 1.1959888888888888);
    $('#sqmt').html(valNum);
    $('#mutthi').html(valNum * 0.07973259259259259);
    $('#sqft').html(valNum * 10.7639);
    $('#acre').html(valNum * 0.0002471051423324151);
    $('#yards').html(valNum * 1.1959888888888888);
}

function convertSqFt(valNum){
    $('#nali').html(valNum * 0.000462962962962963);
    $('#bigha').html(valNum * 0.00014688601645123384);
    $('#gaj').html(valNum * 0.1111111111111111);
    $('#sqmt').html(valNum * 0.09290312990644656);
    $('#mutthi').html(valNum * 0.007407407407407408);
    $('#sqft').html(valNum);
    $('#acre').html(valNum * 0.00002295684113865932);
    $('#yards').html(valNum * 0.1111111111111111);
}

function convertMutthi(valNum){
    $('#nali').html(valNum * 0.0625);
    $('#bigha').html(valNum * 0.01982961222091657);
    $('#gaj').html(valNum * 15);
    $('#sqmt').html(valNum * 12.541922537370285);
    $('#mutthi').html(valNum);
    $('#sqft').html(valNum * 135);
    $('#acre').html(valNum * 0.0030991735537190084);
    $('#yards').html(valNum * 15);
}

function convertAcre(valNum){
    $('#nali').html(valNum * 20.166666666666668);
    $('#bigha').html(valNum * 6.3983548766157465);
    $('#gaj').html(valNum * 4840);
    $('#sqmt').html(valNum * 4046.8603387248118);
    $('#mutthi').html(valNum * 322.6666666666667);
    $('#sqft').html(valNum * 43560);
    $('#acre').html(valNum * 1);
    $('#yards').html(valNum * 4840);
}

function convertSqYards(valNum){
    $('#nali').html(valNum * 0.004166666666666667);
    $('#bigha').html(valNum * 0.0013219741480611047);
    $('#gaj').html(valNum * 1);
    $('#sqmt').html(valNum * 0.836128169158019);
    $('#mutthi').html(valNum * 0.06666666666666667);
    $('#sqft').html(valNum * 9);
    $('#acre').html(valNum * 0.00020661157024793388);
    $('#yards').html(valNum * 1);
}

/////////////////////////////////////////////////////////////////////////////////////
function lengthConverter(valNum) {
    var b = $('#onChange').val();
    window['convert'+b](valNum);
}

//onChange Select
$('#onChange').on('change', function () {
    var a = $('#num_val').val();
    var b = $('#onChange').val();
    window['convert'+b](a);
});