var tipoDiabetes;
var idade, hereditariedade, consumoAlcoolico,
alimentacao, atividadeFisica, publicoFeminino,
temHistorico, stress, imc, mulher, gravida, id;
temHistorico = false;
$().ready(function() {
    id = parseInt($("input[name=id]").val());
    //mulher = Boolean($("input[name=mulher]").val());
    mulher= false;
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
        hereditariedade == NaN || alimentacao == NaN || stress == NaN)
        {
          return false;
        }

        verificaTipoDiabetes();

    });
});

function verificaTipoDiabetes(){
  var total = atividadeFisica + consumoAlcoolico + hereditariedade;
  total = alimentacao + stress;

  total += adicionalIMC();
    tipoDiabetes = "nenhum";
  // if(mulher && gravida){
  //   tipoDiabetes = total > 100 ? "gestacional": "nenhum";
  //
  // }
  // else
    if(idade > 30 && idade <= 40){
    total += 20;

    if (total > 0 && total <= 50) {
      tipoDiabetes = "nenhum";

    }else if (total > 50 && total < 150) {
      tipoDiabetes = "preDiabetes";

    }else{
      tipoDiabetes = "tipoI";
    }

  }
  else if(idade > 40){
    total += 50;

    tipoDiabetes = total > 100 ? "tipoII": "nenhum";

  }

  var obj = new Object();
   obj.tipoDiabetes = tipoDiabetes;
   obj.pontuacao  = total;
   obj.id = id;
  var data= JSON.stringify(obj);

  console.log(data);
  $.ajax({
  url: 'armazenaPontos.php',
  type: "POST",
  dataType:'json',
  data: JSON.stringify(obj),
  success: function(data) {
      window.location.href="paginas/perfil.php";
      $("form").hide();
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log(errorThrown);
      alert("Erro!");
  }
});

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
  if(hereditariedade > 20) temHistorico = true;
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
  r9 = parseInt($('input[name=op9]:checked').val());
  r10 = parseInt($('input[name=op10]:checked').val());
  r11 = parseInt($('input[name=op11]:checked').val());
  stress = r9 + r10 + r11;
  console.log(stress);
}

// function respPublicoFeminino() {
//
//   if(mulher){
//     var r12, r13, r14;
//     r12 = parseInt($('input[name=op12]:checked').val());
//     r13 = parseInt($('input[name=op13]:checked').val());
//     r14 = parseInt($('input[name=op14]:checked').val());
//
//     if(r13 > 0) gravida = true;
//
//     publicoFeminino = r12 + r13 + r14;
//
//     if (publicoFeminino == NaN) {
//       return false;
//     }
//   }else{
//     publicoFeminino = 0;
//   }
//   console.log(publicoFeminino);
//   return true;
// }
