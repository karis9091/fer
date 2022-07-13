<?php

class Router {

  private $viewsManager;

  function __construct(){
    $this->viewsManager = new ViewsManager();
  }

  function loadView($viewType){
    switch ($viewType) {

      # 1. Registrar el nombre de la URL desde donde se va a acceder
      # 2. Ver ViewsManager.php para el paso 2
      # 3. Llamar método previamente creado en el viewsManager y salir del switch

      case "login":
      $this->viewsManager->loadLogin();
      break;

      case "home":
      $this->viewsManager->loadHome();
      break;

      case "contenido":
        $this->viewsManager->loadContenido();
        break;

      case "nosotros":
        $this->viewsManager->loadNosotros();
        break;

        case "empleo":
          $this->viewsManager->loadEmpleo();
          break;

        case "impacto":
          $this->viewsManager->loadImpacto();
          break;

          case "subimpacto":
            $this->viewsManager->loadSubImpacto();
            break;
        case "subempelo":
          $this->viewsManager->loadSubEmpleo();
          break;

          case "agua":
            $this->viewsManager->loadAgua();
            break;
    
      default:
      $this->viewsManager->loadHome();
      break;
    }
  }
}
?>
