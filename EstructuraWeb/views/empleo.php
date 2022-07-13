
<div id="contenido" style='overflow:scroll; height: 450px;'>
  <div class="row">
    <form class="col s12">
      <div class="row">

        <div id="palabra" class="input-field col s4">
          <input placeholder="Placeholder" id="texto1" type="text" class="validate">
          <label for="first_name">palabra</label>
        </div>

        <div id="posicion" class="input-field col s4">
        <option value="" disabled selected>Selecciona una posicion</option>
          <select id="selectPosition">
          </select>
        </div>

        <div id="color"  class="input-field col s4">
          <select id="selectColor">
          <option value="" disabled selected>Selecciona un color</option>
            <option value="blue">azul</option>
            <option value="red">rojo</option>
            <option value="pink">rosa</option>
          </select>
        </div>

      </div>
      <div class="input-field col s4">
        <select id="select">
          <option value="" disabled selected>Selecciona tu opcion</option>
          <option value="3">Agregar</option>
          <option value="1">Editar</option>
          <option  value="2">Eliminar</option>
          <option  value="4">Color</option>
        </select>
      </div>
      <a class="waves-effect waves-light btn" id="enviar" >enviar</a>
</div>
  
  
<div id="contenido2">
  <h5>Dentro de esta columna se mostrara la palabra ingresada</h5>
    <h5>0</h5>
    <h5>1</h5>
    <h5>2</h5>
    <h5>3</h5>
    <h5>4</h5>
    <h5>5</h5>
</div>
  
  <!-- <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    
  </div>
        
     
    
     
      -->

    


<script type="text/javascript" src="./scripts/empleo.js?v1.0.0"></script>
