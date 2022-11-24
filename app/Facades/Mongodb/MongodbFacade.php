<?php

namespace App\Facades\Mongodb;

use Illuminate\Support\Facades\Facade;

class MongodbFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'mongodb';
    }
}
