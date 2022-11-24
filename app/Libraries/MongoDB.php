<?php
// https://docs.mongodb.com/php-library/v1.2/tutorial/

// https://www.php.net/manual/en/mongodb.tutorial.library.php

    function mongodbConnect(){
        try
        {
            $dbHost = config('app.mongodbhost');
            $dbName = config('app.mongodbdb');
            $dbPort = config('app.mongodbport');
            $client = new \MongoDB\Client('mongodb://'.$dbHost.':'.$dbPort);

            $client = $client->$dbName;
            return $client;
        }
        catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e)
        {
            // PHP cannot find a MongoDB server using the MongoDB connection string specified
            // do something here
        }
    }


    function mongodbInsertOne($collection, $document){
        try {
            $client = mongodbConnect();

            $collection = $client->$collection;
            $collection->insertOne($document);
        } catch (\Throwable $th) {

        }
    }

    function mongodbFind($collection){
        try {
            $client = mongodbConnect();

            $collection = $client->$collection->find()->toArray();
            return $collection;
        } catch (\Throwable $th) {

        }
    }


?>
