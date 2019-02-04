<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"

  // strpos :— Find the position of the first occurrence of a substring in a string.
  // $_SERVER[] :- $_SERVER is an array containing information such as headers, 
  //   paths, and script locations. The entries in this array are created by the web server. 
  // SCRIPT_NAME :- Contains the current script's path. 
  //   This is useful for pages which need to point to themselves. 
  //   The __FILE__ constant contains the full path and filename of the current (i.e. included) file.
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);


  require_once('functions.php');

?>
