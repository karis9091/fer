document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, options);
});
 var view = $(' .hiddenView').attr("id");
console.log(view);

 if(view == "home") {
    $("#breadcrumbHome").show(0);
} else if (view == "impacto"){
    $("#breadcrumbImpacto").show(0);
}else if (view == "nosotros"){
    $("#breadcrumbNosotros").show(0);
}else if (view == "empleo"){
    $("#breadcrumbEmpleo").show(0);
}else if (view == "contenido"){
    $("#breadcrumbSustentabilidad").show(0);

}else if (view == "subimpacto"){
  $("#breadcrumbSubimpacto").show(0);

}else if (view == "subempleo"){
  $("#breadcrumbSubempleo").show(0);

}else if (view == "agua"){
  $("#breadcrumbAgua").show(0);
};
 


$("#sustentabilidad").click(function(){
    redirectS()
  });
  
  
  function redirectS(){  
    window.location = "?view=contenido";
  }

  $("#nosotros").click(function(){
    redirectN()
  });
  
  
  function redirectN(){  
    window.location = "?view=nosotros";
  }

  $("#impacto").click(function(){
    redirectI()
  });
  
  function redirectI(){  
    window.location = "?view=impacto";
  }

  function redirectE(){  
    window.location = "?view=empleo";
  }

  $("#empleo").click(function(){
    redirectE()
  });

  function redirectF(){  
    window.location = "?view=home";
  }

  $("#home").click(function(){
    redirectF()
  });

  function redirectG(){  
    window.location = "?view=subimpacto";
  }

  $("#subimpacto").click(function(){
    redirectG()
  });

  function redirectH(){  
    window.location = "?view=subempleo";
  }

  $("#subempleo").click(function(){
    redirectH()
  });

  function redirectI(){  
    window.location = "?view=agua";
  }

  $("#agua").click(function(){
    redirectI()
  });
  
 
        