<?php
require 'vendor/autoload.php';
require './env.php';

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
// header('Content-Disposition: attachment; filename="report.json"');
// header('Content-Type: application/octet-stream'); 

use Google\Cloud\Storage\StorageClient;

$storage = new StorageClient([
    'keyFile' => json_decode($_ENV["GOOGLE_CREDENTIALS"] , true)
]);

// list all buckets 
// foreach ($storage->buckets() as $bucket) {
//     echo $bucket->name()
//      . "<br>";
// }

//List Cloud Storage bucket objects.
// $bucket = $storage->bucket('sped-storage');
// foreach ($bucket->objects() as $object) {
//     printf('Object: %s' . PHP_EOL, $object->name());
// }

//Download file 
// $bucket = $storage->bucket('sped-storage');
// $object = $bucket->object('json_sped/padrao.json');
// echo $object->downloadAsStream(); //return content in browser
// $object->downloadToFile(__DIR__. "/{$object->name()}" ); // save file in a folder



// create a json file with reports content and then make upload in gc storage, finally delete temporary file 
// $myfile = fopen("new_report.json", "w");
// fwrite($myfile, '{"ex":"ample"}');

// $file = fopen("new_report.json", 'r');
// $bucket = $storage->bucket('sped-storage');
// $object = $bucket->upload($file, [
//     'name' => "json_sped/report.json"
// ]);
// unlink("new_report.json");