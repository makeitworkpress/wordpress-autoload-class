<?php
/**
 * Our custom class, namespaced according to the folder it is residing in.
 */
namespace Folder;

class Someclass {
    
    private $property;

    public function __construct() {
         $this->property = 'Folder';       
    }

    public function getProperty() {
          return $this->property;
    }

}
