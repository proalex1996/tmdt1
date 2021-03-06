<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . 'Controller.php');
    
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
        break;
      case 'home':
        $controller = new HomeController();
        break;
      case 'products':
        $controller = new ProductController();
        break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
      case 'tablets':
        // we need the model to query the database later in the controller
        $controller = new TabletController();
      break;
      case 'details':
        // we need the model to query the database later in the controller
        $controller = new DetailController();
      break;
      case 'cart':
        // we need the model to query the database later in the controller
        $controller = new CartController();
      break;
      case 'laptop':
        // we need the model to query the database later in the controller
        $controller = new LaptopController();
      break;
      case 'pk':
        // we need the model to query the database later in the controller
        $controller = new PkController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'posts' => ['index', 'show'],
                      'home' => ['home','error'],
                      'products' => ['home','error'],
                      'tablets' => ['home','error'],
                      'details' => ['home','error','save'],
                      'cart' => ['home','error','save'],
                      'laptop' => ['home','error',],
                      'pk' => ['home','error',]);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>