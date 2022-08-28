<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'learApp');
  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/learApp');
  // Site Name
define('SITENAME' , "learApp");

// //Include Google Client Library for PHP autoload file
// require_once APPROOT . '/vendor/autoload.php';

// //Make object of Google API Client for call Google API
// $google_client = new Google_Client();

// //Set the OAuth 2.0 Client ID
// $google_client->setClientId('1078451422911-ru3ga289cs742ev4ojj9p06btkaicjj3.apps.googleusercontent.com');

// //Set the OAuth 2.0 Client Secret key
// $google_client->setClientSecret('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');

// //Set the OAuth 2.0 Redirect URI
// $google_client->setRedirectUri('http://localhost/project-khadamat/TechController/loginWithGoogle');

// //
// $google_client->addScope('email');

// $google_client->addScope('profile');

// //start session on web page
session_start();