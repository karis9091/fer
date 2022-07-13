
$(document).ready(function() {
    $("#enviar").click(function(){Enter();
        Acciones();
    });  
    // reestablece la selección a todos los elementos h3 en #content
});

function Acciones(){
    const accion =$('#select').val();
    if(accion==1) Editar();
    if(accion==2)Eliminar();
    if(accion==3)Agregar();
    Color();
    Posicion();
}


    $("#texto1").keypress(function(e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if(code==13){  
            Acciones();
        }
      });

    $("#contenido").scroll(function() {
        
        var sv = $("#contenido").scrollTop().toFixed(2);
        console.log(sv);
        if (sv >=50 && sv <=90){
            alert("posicion:" + sv);
        }

    });



$(document).ready(function(){
    Posicion();
    $('select').formSelect();
    });


function Editar(){
    $('#select').formSelect();
    $("#select option[value='3']").attr("selected", true);
    
    var text1 =$("#texto1").val();
    var text2 =$("#selectPosition").val();


    $('#contenido2')
    .find('h5')
    .eq(text2)

    .html(text1)
    
    .end() //restablecee
};

$('#select').change(function(){
    const accion = $('#select').val();
     
     if(accion == 1){
        $('#palabra').fadeIn(400);
        $('#color').fadeOut(800);
        $('#posicion').fadeIn(400);
      } else if(accion == 3) {
        $('#palabra').fadeIn(400);
        $('#color').hide();
        $('#posicion').fadeIn(400);
      } else if(accion == 2) {
        $('#palabra').fadeOut(800);
        $('#color').fadeOut(800);
        $('#posicion').fadeIn(400);
      } else if(accion == 4) {
        $('#palabra').fadeOut(800);
        $('#color').fadeIn(400);
        $('#posicion').fadeIn(400);
        
      }
  });

function Agregar(){
$('#select').formSelect();
$("#select option[value='1']").attr("selected", true);

var text1 = $("#texto1").val();
 var text2= $("#selectPosition").val();
 
 $('#selectPosition').append('text1');

 $('#contenido2')

 .find('h5')

 .eq(text2)

 .html(text1)

.end() // reestablece la selección a todos los elementos h3 en #content
};



function Eliminar(){
    $('#select').formSelect();
    $("#select option[value='2']").attr("selected", true);

    var text2= $("#selectPosition").val();

    $('#contenido2')

    .find('h5')
   
    .eq(text2).remove()
    
};

function Posicion(){
    $('#selectPosition').empty();
    var lenghtDiv = $('#contenido2').find('h5').length;

    for(let x=0; x<lenghtDiv; x++ ){
        $('#selectPosition').append('<option value='+x+'>'+x+'</option>')
      }

    $('select').formSelect();

   /*  $('#select').find('h5').each(function(index){
        $('select').find('#selectPosition').append(`<option value=${index}>${index+"-"+$(this).text()}</option>`)
    }); */
    
}

function Color(){
   
    var color = $('#selectColor').val();
   
    $('#contenido2').find('h5').eq($('#selectPosition').val()).css('color',color);

}
