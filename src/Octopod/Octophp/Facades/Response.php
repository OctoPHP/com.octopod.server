<?php

namespace Octopod\Octophp\Facades;

use Illuminate\Support\Facades\Facade;


class Response extends Facade {

    public static function getFacadeAccessor()
    {
        return 'response';
    }

}