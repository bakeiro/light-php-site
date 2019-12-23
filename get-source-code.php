<?php

$source_code = file_get_contents('https://github.com/bakeiro/Light-PHP/archive/1.7.zip');
file_put_contents('./light-php.zip', $source_code);

$zip_obj = new ZipArchive();
$zip_obj->open('light-php.zip');

// root files
$index_php_code = $zip_obj->getFromName("Light-PHP-1.7/index.php");
file_put_contents('./index.php', $index_php_code);

$config_php_code = $zip_obj->getFromName("Light-PHP-1.7/config.rename.php");
file_put_contents('./config.rename.php', $config_php_code);

$ini_php_code = $zip_obj->getFromName("Light-PHP-1.7/php.rename.ini");
file_put_contents('./php.rename.ini', $ini_php_code);

$editorconfig_code = $zip_obj->getFromName("Light-PHP-1.7/.editorconfig");
file_put_contents('./.editorconfig', $editorconfig_code);

$htaccess_code = $zip_obj->getFromName("Light-PHP-1.7/.htaccess");
file_put_contents('./.htaccess', $htaccess_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/post-install.php");
file_put_contents('./post-install.php', $post_install_code);

$route_code = $zip_obj->getFromName("Light-PHP-1.7/system/routes.php");
file_put_contents('./system/routes.php', $routes_code);

$startup_code = $zip_obj->getFromName("Light-PHP-1.7/system/startUp.php");
file_put_contents('./system/startUp.php', $startup_code);

// engine files
$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Autoloader.php");
file_put_contents('./system/engine/Autoloader.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Config.php");
file_put_contents('./system/engine/Config.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Console.php");
file_put_contents('./system/engine/Console.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Controller.php");
file_put_contents('./system/engine/Controller.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Database.php");
file_put_contents('./system/engine/Database.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Errors.php");
file_put_contents('./system/engine/Errors.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Output.php");
file_put_contents('./system/engine/Output.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Router.php");
file_put_contents('./system/engine/Router.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Session.php");
file_put_contents('./system/engine/Session.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/SessionSecureHandler.php");
file_put_contents('./system/engine/SessionSecureHandler.php', $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-1.7/system/engine/Util.php");
file_put_contents('./system/engine/Util.php', $post_install_code);
