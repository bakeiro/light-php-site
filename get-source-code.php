<?php

// Folders
if (!file_exists("./system/library") && !is_dir("./system/library")){
    mkdir("./system/library");
}

if (!file_exists("./system/engine") && !is_dir("./system/engine")){
    mkdir("./system/engine");
}

// Source code
$source_code_version = "1.85";
$source_code = file_get_contents("https://github.com/bakeiro/Light-PHP/archive/".$source_code_version.".zip");
file_put_contents("./light-php.zip", $source_code);

$zip_obj = new ZipArchive();
$zip_obj->open("light-php.zip");

// Root files
$index_php_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/index.php");
file_put_contents("./index.php", $index_php_code);

$config_php_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/config.rename.php");
file_put_contents("./config.rename.php", $config_php_code);

$ini_php_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/php.rename.ini");
file_put_contents("./php.rename.ini", $ini_php_code);

$editorconfig_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/.editorconfig");
file_put_contents("./.editorconfig", $editorconfig_code);

$htaccess_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/.htaccess");
file_put_contents("./.htaccess", $htaccess_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/post-install.php");
file_put_contents("./post-install.php", $post_install_code);

$route_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/routes.php");
file_put_contents("./system/routes.php", $route_code);

$startup_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/startup.php");
file_put_contents("./system/startup.php", $startup_code);

// Engine files
$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/engine/Autoloader.php");
file_put_contents("./system/engine/Autoloader.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/engine/Controller.php");
file_put_contents("./system/engine/Controller.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/engine/Errors.php");
file_put_contents("./system/engine/Errors.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/engine/Router.php");
file_put_contents("./system/engine/Router.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/engine/SessionSecureHandler.php");
file_put_contents("./system/engine/SessionSecureHandler.php", $post_install_code);

// Library 
$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/library/Console.php");
file_put_contents("./system/library/Console.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/library/Database.php");
file_put_contents("./system/library/Database.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/library/Output.php");
file_put_contents("./system/library/Output.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/library/Session.php");
file_put_contents("./system/library/Session.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/library/Util.php");
file_put_contents("./system/library/Util.php", $post_install_code);

$post_install_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/library/Config.php");
file_put_contents("./system/library/Config.php", $post_install_code);
