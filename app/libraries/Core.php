<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params
   */
// session_start();
  class Core {
    protected $currentController = 'PagesController';// takes name of file / class in controller
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){

      $url = $this->getUrl();
      
      if((isset($url[1])) && file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[0]);//'Curent'
        // Unset 0 Index
        unset($url[0]);
      }
      
      // Require the controller
      require_once '../app/controllers/'. $this->currentController . '.php';

      // Instantiate controller class
      $this->currentController = new $this->currentController;

///   $Core = new Core;
      // Check for second part of url
      if(isset($url[1])){
        // Check to see if method exists in controller
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          // Unset 1 index
          unset($url[1]);
          // []
          
        }
        else{
          echo 'Method does not exist';
        }
      }

      // Get params

      $this->params = $url ? array_values($url) : [];

     
      
      
      // Call a callback with array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
// /jamal/index
    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');//remove last slash
        $url = filter_var($url, FILTER_SANITIZE_URL);
      
        $url = explode('/', $url); // 
        return $url;
      }
    }
  } 
  
  