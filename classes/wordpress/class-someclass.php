<?php
/**
 * This file followings the WordPress naming conventions, using class-{classname}.php
 */
namespace Wordpress;

class Someclass {
    
    private $property;

    public function __construct() {
         $this->property = 'WordPress';       
    }

    public function getProperty() {
          return $this->property;
    }

}
