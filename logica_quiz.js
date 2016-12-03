var tipoUm, tipoDois;
var idade, hereditariedade, consumoAlcoolico,
alimentacao, atividadeFisica,
temHistorico, stress, imc, mulher;
temHistorico = false;
$().ready(function() {

    mulher = Boolean($("input[name=mulher]").val());
    imc = parseInt($("input[name=imc]").val());
    idade = parseInt($("input[name=idade]").val());

    $('form').on('submit', function(e){
        e.preventDefault();

        respAtividadeFisica()
        respConsumoAlcool();
        respHereditariedade();
        respAlimentacao();
        respStress();

        if(atividadeFisica == NaN || consumoAlcoolico == NaN ||
        hereditariedade == NaN || alimentacao == NaN || stress == NaN ){
          return false;
        }

        verificaTipoDiabetes();

    });
});

function verificaTipoDiabetes(){
  var total = atividadeFisica + consumoAlcoolico + hereditariedade;
  total = alimentacao + stress;

  total += adicionalIMC();

  if(mulher){

    // gestacional
  }
  else if(idade > 30 && idade <= 40){
    total += 20;
    // normal;
    // preDiabetes;
  }
  else if(idade > 40){
    total += 50;
    // tipoII

  } else {


  }
}

function adicionalIMC(){
  if(imc > 25 && imc < 30){
    return 20;
  }
  else if (imc > 30) {
    return 50;
  }
  return 0;
}

function respAtividadeFisica(){
  atividadeFisica = 0;
  var r1, r2, r3;
  r1 = parseInt($('input[name=op1]:checked').val());
  r2 = parseInt($('input[name=op2]:checked').val());
  r3 = parseInt($('input[name=op3]:checked').val());
  atividadeFisica = r1 + r2 + r3;
  console.log(atividadeFisica);
}

function respConsumoAlcool(){
  consumoAlcoolico = 0;
  var r4, r5;
  r4 = parseInt($('input[name=op4]:checked').val());
  r5 = parseInt($('input[name=op5]:checked').val());
  consumoAlcoolico = r4  + r5;
  console.log(consumoAlcoolico);
}

function respHereditariedade(){
  hereditariedade = 0;
  var r1,r2,r3,r4;
  r1 = $('input[name=op6r1]').is('checked') ? parseInt($('input[name=op6r1]:checked').val()) : 0;
  r2 = $('input[name=op6r2]').is('checked') ? parseInt($('input[name=op6r1]:checked').val()) : 0;
  r3 = $('input[name=op6r3]').is('checked') ? parseInt($('input[name=op6r1]:checked').val()) : 0;
  r4 = $('input[name=op6r4]').is('checked') ? parseInt($('input[name=op6r1]:checked').val()) : 0;
  hereditariedade = r1 + r2 + r3 + r4;
  if(hereditariedade > 0) temHistorico = true;
  console.log(hereditariedade);
}

function respAlimentacao(){
  alimentacao = 0;
  var r7, r8;
  r7 = parseInt($('input[name=op7]:checked').val());
  r8 = parseInt($('input[name=op8]:checked').val());
  alimentacao = r7 + r8;
  console.log(alimentacao);
}

function respStress(){
  stress = 0;
  var r9, r10, r11;
  stress += parseInt($('input[name=op9]:checked').val());
  stress += parseInt($('input[name=op10]:checked').val());
  stress += parseInt($('input[name=op11]:checked').val());
  stress = r9 + r10 + r11;
  console.log(stress);
}
