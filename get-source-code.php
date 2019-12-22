<?php

$source_code = file_get_contents('https://github.com/bakeiro/Light-PHP/archive/1.7.zip');
file_put_contents('./light-php.zip', $source_code);

$zip_obj = new ZipArchive();
$zip_obj->open('light-php.zip');

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

/*
rename("system/temp_folder/Light-PHP-1.7/system/engine", "system/engine");
rename("system/temp_folder/Light-PHP-1.7/post-install.php", "post-install.php");
rename("system/temp_folder/Light-PHP-1.7/.github", ".github");

unlink("system/temp_folder/Light-PHP-1.7/");
*/