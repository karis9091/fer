<?php
$view=$_GET['view'];
?>

<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="?view=home" class="brand-logo">Felix</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
      </ul>
    </div>

    

    <div class="nav-content">
       <!-- Dropdown Trigger -->
  <!-- <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a> -->

<!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider" tabindex="-1"></li>
      <li><a href="#!">three</a></li>
      <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
      <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
    </ul>
      <ul class="tabs tabs-transparent">
        <li class="tab" id="nosotros"><a >Nosotros</a></li>
        <li class="tab" id="impacto"><a>Agua </a></li>
        <li class="tab " id="empleo"><a>Empleo</a></li>
        <!-- <li class="tab" id="sustentabilidad"><a>Sustentabilidad</a></li> -->
        <li><a class="dropdown-trigger" id="dropdown1" href="#!" data-target="dropdown1">Sustentabilidad<i class="material-icons right">arrow_drop_down</i></a></li>
        
      </ul>
    </div>



</nav>
<nav>
  
  <div class="nav-wrapper">
  <div class="col s12" id="breadcrumbAgua" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=agua" class="breadcrumb">Agua</a>
    </div>
    <div class="col s12" id="breadcrumbHome" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
    </div>
  
<!-- Contenido -->
  
     
    <!-- //impacto -->
  
        <div class="col s12" id="breadcrumbImpacto" style="display: none;">
          <a href="?view=home" class="breadcrumb">Home</a>
          <a href="?view=impacto" class="breadcrumb">Impacto</a>
        </div>
    <!-- //nosotros -->
    
        <div class="col s12" id="breadcrumbNosotros" style="display: none;">
          <a href="?view=home" class="breadcrumb">Home</a>
          <a href="?view=nosotros" class="breadcrumb">Nosotros</a>
        </div>
    
    <!-- //empleo -->
    
        <div class="col s12" id="breadcrumbEmpleo" style="display: none;">
          <a href="?view=home" class="breadcrumb">Home</a> 
          <a href="?view=empleo" class="breadcrumb">Empleo</a>
         </div>

         <div class="col s12" id="breadcrumbSustentabilidad" style="display: none;">
          <a href="?view=home" class="breadcrumb">Home</a> 
          <a href="?view=contenido" class="breadcrumb">Sustentabilidad</a>
         </div>

         <div class="col s12" id="breadcrumbSubmpleo" style="display: none;">
          <a href="?view=home" class="breadcrumb">Home</a> 
          <a href="?view=empleo" class="breadcrumb">Empleo</a>
          <a href="?view=subempleo" class="breadcrumb">Subempleo</a>
         </div>
        
    </div>

    <!-- //ahora las subpaginas -->

    <!-- //historia
    <div class="nav-wrapper">
        <div class="col s12" id="breadcumbEmpleo" style="display: none;">
            <a href="?view=nosotros" class="breadcrumb">Empleo</a>
            </div>
        </div>
    </div>
 -->
</nav>
  <h5 class ="hiddenView" id="<?php if($view) echo $view ?>"> </h5>
  


  
<script src="./scripts/navbar.js?v1.0.0"></script>
