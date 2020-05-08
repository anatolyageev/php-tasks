<?php

$myfile = fopen("test.txt", "w") or die("Unable to open file!");
$txt = "Привет, мир!";
fwrite($myfile, $txt);

echo fread($myfile, filesize("test.txt"));

$file = file_get_contents("test.txt");
echo nl2br($file);
fclose($myfile);

rename("test.txt", "mir.txt");

if (!is_dir('folder/')) {
    mkdir("folder/", 0700);
}

copy('mir.txt', 'folder/test.txt');

copy('mir.txt', 'folder/world.txt');

$fileSize = filesize('folder/world.txt');

echo "<br> <br>";
echo $fileSize;
echo " byte <br>";
echo $fileSize / 1000000;
echo " Mb <br>";
echo ($fileSize / 1000000000);
echo "Gb <br>";

unlink('folder/world.txt');
echo "<br> <br>";
if (file_exists('folder/world.txt')) echo 'Файл folder/world.txt существует!!';
else echo 'folder/world.txt - такого Файла НЕТ!!';
echo "<br> <br>";
if (file_exists('mir.txt')) echo 'Файл mir.txt существует!!';
else echo 'mir.txt - такого Файла НЕТ!!';

if (!is_dir('test1/')) {
    mkdir("test1/", 0700);
}

if (is_dir('test1/')) {
    rename('test1/', "www/");
}

if (is_dir('www/')) {
    rmdir("www/");
}

if (!is_dir('test/')) {
    mkdir("test/", 0700);
}

$arFolders = array("Folder1", "Folder2", "Folder3");
foreach ($arFolders as $value) {
    $newfolder = "test/" . $value;
    if (!is_dir($newfolder)) {
        mkdir($newfolder, 0700);
    }
}

$dir    = 'test/';
$files1 = scandir($dir);
print_r($files1);
echo "<br> <br>";

foreach($files1 as $v){
    if (is_file($v)) {
        echo $v . "<br>";
    }
}

$filelist = array();
if ($handle = opendir($dir)) {
    while ($entry = readdir($handle)) {
        if (is_file($entry)) {
            $filelist[] = $entry;
        }
    }
    print_r($filelist);
    closedir($handle);
}

$filelist = array();
if ($handle = opendir(".")) {
    while ($entry = readdir($handle)) {
        if (strpos($entry, "*.txt") === 0) {
            $filelist[] = $entry;
        }
    }
    closedir($handle);
}

