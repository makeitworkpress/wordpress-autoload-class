<?php
 spl_autoload_register( function($classname) {

    // Regular
    $class      = str_replace( '\\', DIRECTORY_SEPARATOR, strtolower($classname) ); 
    $classpath  = dirname(__FILE__) .  DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $class . '.php';

    // WordPress
    $parts      = explode('\\', $classname);
    $class      = 'class-' . strtolower( array_pop($parts) );
    $folders    = strtolower( implode(DIRECTORY_SEPARATOR, $parts) );
    $wppath     = dirname(__FILE__) .  DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $folders . DIRECTORY_SEPARATOR . $class . '.php';
    
    if ( file_exists( $classpath ) ) {
        include_once $classpath;
    } elseif(  file_exists( $wppath ) ) {
        include_once $wppath;
    }
   
} );


/**
 * Calls an autoloaded example class
 */
$class = new Folder\Someclass();   // Constructs the class
echo $class->getProperty(); // Echoes Folder


/*
 * Calls an autoloaded class, but a folder deeper
 */
$class = new Folder\Subfolder\Someclass();   // Constructs the class
echo $class->getProperty(); // Echoes Folder


/*
 * Calls an autoloaded class according to the wordpress standard
 */
$class = new WordPress\Someclass();   // Constructs the class
echo $class->getProperty(); // Echoes WordPress


/**
 * Uses composer to autoload our vendor modules. 
 * Make sure you are using composer update --prefer dist in your terminal first, so these modules are loaded!
 */
require_once 'vendor/autoload.php';

/**
 * This loads the WP Components module, as it is included in the example...
 */
$components = new MakeitWorkPress\WP_Components\Boot();
