<?php
require 'vendor/autoload.php';
require './env.php';

use Google\Cloud\Storage\StorageClient;

$storage = new StorageClient([
    'keyFile' => json_decode($_ENV["GOOGLE_CREDENTIALS"] , true)
]);

// list all buckets 
foreach ($storage->buckets() as $bucket) {
    echo $bucket->name()
     . "<br>";
}
