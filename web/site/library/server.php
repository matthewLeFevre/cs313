<?php

class server {
  public function __construct (){
    
  } 

  public function listen() {
    $this->action = filter_input(INPUT_POST, 'action');
    if ($this->action == NULL){
      $this->action = filter_input(INPUT_GET, 'action');
      if($this->action == NULL){
        $this->action = 'home';
      }
    }
  }

  public function getAction() {
    return $this->action;
  }
}