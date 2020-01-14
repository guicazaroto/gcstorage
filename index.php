<?php
require 'vendor/autoload.php';
require './env.php';

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
// $object->downloadToFile(__DIR__. "/{$object->name()}" );

