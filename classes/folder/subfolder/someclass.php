<?php
/**
 * This class is namespaced according to the folder structure!
 */
namespace Folder\Subfolder;

class Someclass {
    
    private $property;

    public function __construct() {
         $this->property = 'Subfolder';       
    }

    public function getProperty() {
          return $this->property;
    }

}
