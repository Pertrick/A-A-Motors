<?php
/**
 * An initialization file collects data, loads files, and organizes information
 * for an application.
 */
declare(strict_types=1);

/**
 * include the necessary configuration info
 */

 include_once 'config/db/db-cred.inc.php';

 /**
  * Define constants for configuration info
  */

  foreach($constant as $name => $val){
      define($name, $val);
  }


   /**
    * Define the autoload function for classes
    */
    function load_model($class)
    {
        $filename = "../sys/class/class." . $class . ".inc.php";
        if(file_exists($filename)){
            include_once $filename;
        }
    }

    spl_autoload_register('load_model');