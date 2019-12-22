<?php

$source_code = file_get_contents('https://github.com/bakeiro/Light-PHP/archive/1.7.zip');
file_put_contents('./light-php.zip', $source_code);

$zip_obj = new ZipArchive();
$zip_obj->open('light-php.zip');
$zip_obj->extractTo('system/temp_folder/');

rename("system/temp_folder/Light-PHP-1.7/system/engine", "system/engine");
rename("system/temp_folder/Light-PHP-1.7/index.php", "index.php");
rename("system/temp_folder/Light-PHP-1.7/config.rename.php", "config.rename.php");
rename("system/temp_folder/Light-PHP-1.7/php.rename.ini", "php.rename.ini");
rename("system/temp_folder/Light-PHP-1.7/.htaccess", ".htaccess");
rename("system/temp_folder/Light-PHP-1.7/.editorconfig", ".editorconfig");
rename("system/temp_folder/Light-PHP-1.7/post-install.php", "post-install.php");
rename("system/temp_folder/Light-PHP-1.7/.github", ".github");

unlink("system/temp_folder/Light-PHP-1.7/");
