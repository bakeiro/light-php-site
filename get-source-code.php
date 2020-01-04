<?php

// use new code instead:
// https://github.com/bakeiro/Light-PHP/archive/1.8.zip
$source_code = file_get_contents('https://github.com/bakeiro/Light-PHP/archive/1.8.zip');
file_put_contents('./light-php.zip', $source_code);

$zip_obj = new ZipArchive();
$zip_obj->open('light-php.zip');

// root files
$index_php_code = $zip_obj->getFromName("Light-PHP-1.8/index.php");
file_put_contents('./index.php', $index_php_code);

$config_php_code = $zip_obj->getFromName("Light-PHP-1.8/config.rename.php");
file_put_contents('./config.rename.php', $config_php_code);

$ini_php_code = $zip_obj->getFromName("Light-PHP-1.8/php.rename.ini");
file_put_contents('./php.rename.ini', $ini_php_code);

$editorconfig_code = $zip_obj->getFromName("Light-PHP-1.8/.editorconfig");
file_put_contents('./.editorconfig', $editorconfig_code);

$htaccess_code = $zip_obj->getFromName("Light-PHP-1.8/.htaccess");
file_put_contents('./.htaccess', $htaccess_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/post-install.php");
file_put_contents('./post-install.php', $post_install_code);

$route_code = $zip_obj->getFromName("Light-PHP-1.8/system/routes.php");
file_put_contents('./system/routes.php', $route_code);

$startup_code = $zip_obj->getFromName("Light-PHP-1.8/system/startup.php");
file_put_contents('./system/startup.php', $startup_code);

// engine files
$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/engine/Autoloader.php");
file_put_contents('./system/engine/Autoloader.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/engine/Controller.php");
file_put_contents('./system/engine/Controller.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/engine/Errors.php");
file_put_contents('./system/engine/Errors.php', $post_install_code);


$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/engine/Router.php");
file_put_contents('./system/engine/Router.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/engine/SessionSecureHandler.php");
file_put_contents('./system/engine/SessionSecureHandler.php', $post_install_code);

// library 
$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/library/Console.php");
file_put_contents('./system/library/Console.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/library/Database.php");
file_put_contents('./system/library/Database.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/library/Output.php");
file_put_contents('./system/library/Output.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/library/Session.php");
file_put_contents('./system/library/Session.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.8/system/library/Util.php");
file_put_contents('./system/library/Util.php', $post_install_code);
