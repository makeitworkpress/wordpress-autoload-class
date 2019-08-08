<?php
/**
 * Registers the autoloader at root level (functions.php) of a theme. It looks for PHP classes inside the classes folder.
 */
 spl_autoload_register( function($classname) {

    $class = str_replace( '\\', DIRECTORY_SEPARATOR, strtolower($classname) ); 
    $file  = dirname(__FILE__) .  DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $class . '.php';
    
    if ( file_exists( $file ) ) {
        include_once $file;
    }
   
} );

/**
 * Calls an autoloaded example class
 */
$class = new Folder\Someclass();   // Constructs the class
echo $class->getProperty(); // Echoes 1
