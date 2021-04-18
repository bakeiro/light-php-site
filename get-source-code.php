<?php

// Folders
if (!file_exists("./system/library") && !is_dir("./system/library")){
    mkdir("./system/library");
}

if (!file_exists("./system/engine") && !is_dir("./system/engine")){
    mkdir("./system/engine");
}

if (!file_exists("./system/config") && !is_dir("./system/config")){
    mkdir("./system/config");
}

// Source code
$source_code_version = "1.981";
$source_code = file_get_contents("https://github.com/bakeiro/Light-PHP/archive/".$source_code_version.".zip");
file_put_contents("./light-php.zip", $source_code);

$zip_obj = new ZipArchive();
$zip_obj->open("light-php.zip");

// Root
$file_path = "./";
$files = [".editorconfig", ".gitignore", ".htaccess", "package-lock.json", "package.json", "post-install.php"];
foreach($files as $file) {
  $temp_file = $zip_obj->getFromName("Light-PHP-" . $source_code_version . $file_path . $file);
  file_put_contents($file_path .$file . ".php", $temp_file);
}

// System
$startup_code = $zip_obj->getFromName("Light-PHP-".$source_code_version."/system/bootstrap.php");
file_put_contents("./system/bootstrap.php", $startup_code);

// Config
$file_path = "/system/config/";
$files = ["config", "environment", "ini", "routes"];
foreach($files as $file) {
  $temp_file = $zip_obj->getFromName("Light-PHP-" . $source_code_version . $file_path . $file . ".php");
  file_put_contents("." . $file_path .$file . ".php", $temp_file);
}

// Engine
$file_path = "/system/engine/";
$files = ["Autoloader", "Container", "Controller", "Model", "Router", "SecureSession"];
foreach($files as $file) {
  $temp_file = $zip_obj->getFromName("Light-PHP-" . $source_code_version . $file_path . $file . ".php");
  file_put_contents("./" . $file_path .$file . ".php", $temp_file);
}

// Library
$file_path = "/system/library/";
$files = ["Config", "Console", "Database", "Logger", "Output", "Session", "Util"];
foreach($files as $file) {
  $temp_file = $zip_obj->getFromName("Light-PHP-" . $source_code_version . $file_path . $file . ".php");
  file_put_contents("./" . $file_path .$file . ".php", $temp_file);
}

