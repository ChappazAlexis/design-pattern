<?php

declare (strict_types=1);


class singleton {

    private static Singleton $instance = null;

    private function __construct() {
        // créer l'instance de la classe
    }

    public static function getInstance() {
        if(null === self::$instance) {
            self::$instance = new Singleton();  
          }
      
          return self::$instance;
        
    }
}


new Singleton();
$a = Singleton::getInstance();

var_dump($a);