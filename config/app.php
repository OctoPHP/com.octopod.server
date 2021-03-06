<?php

return array(

    'mode' => 'debug',
//    'mode' => 'release',

    'timezone' => 'Europe/Moscow',

    'imagesUrl' => 'auto',

    'default' => array(
        /*'handler' => 'main',
        'view' => 'main',
        'cache' => false,
        'orientation' => 'portrait',
        'screen' => '640x960',*/
    ),

    // relative to the application folder
    'paths' => array(
        'resources' => '/resources',
        'generated' => '/generated',
        'storage' => '/storage',
        'log' => '/storage/log',
    ),

    //'scaleScreen' => '640x960',

    'screen' => array(
        /*'640x960' => array(
            'optimalWidth' => '640',
            'optimalHeight' => '960',
            'minHeight' => '810',
            'maxHeight' => '1136',
            'minWidth' => '630',
            'maxWidth' => '650'
        ),
        '540x960' => array(
            'optimalWidth' => '540',
            'optimalHeight' => '960',
            'minHeight' => '810',
            'maxHeight' => '960',
            'minWidth' => '530',
            'maxWidth' => '550'
        ),
        '640x1136' => array(
            'optimalWidth' => '640',
            'optimalHeight' => '1136',
            'minHeight' => '1000',
            'maxHeight' => '1200',
            'minWidth' => '600',
            'maxWidth' => '700'
        ),
        '320x480' => array(
            'optimalWidth' => '320',
            'optimalHeight' => '480',
            'minHeight' => '400',
            'maxHeight' => '500',
            'minWidth' => '300',
            'maxWidth' => '359'
        ),
        '360x480' => array(
            'optimalWidth' => '360',
            'optimalHeight' => '480',
            'minHeight' => '400',
            'maxHeight' => '500',
            'minWidth' => '360',
            'maxWidth' => '400'
        ),
        '360x640' => array(
            'optimalWidth' => '360',
            'optimalHeight' => '640',
            'minHeight' => '620',
            'maxHeight' => '660',
            'minWidth' => '340',
            'maxWidth' => '380'
        ),
        '480x800' => array(
            'optimalWidth' => '480',
            'optimalHeight' => '800',
            'minHeight' => '800',
            'maxHeight' => '1000',
            'minWidth' => '480',
            'maxWidth' => '520'
        ),
        '720x1280' => array(
            'optimalWidth' => '720',
            'optimalHeight' => '1280',
            'minHeight' => '1150',
            'maxHeight' => '1400',
            'minWidth' => '660',
            'maxWidth' => '800'
        ),
        '1080x1920' => array(
            'optimalWidth' => '1080',
            'optimalHeight' => '1920',
            'minHeight' => '1900',
            'maxHeight' => '2000',
            'minWidth' => '1000',
            'maxWidth' => '1100'
        ),*/
    ),

    'font' => array(),
    'style' => array(),

    'aliases' => array(
        'App' => 'Octopod\Octophp\Facades\App',
        'Handler' => 'Octopod\Octophp\Facades\Handler',
        'Event' => 'Octopod\Octophp\Facades\Event',
        'Log' => 'Octopod\Octophp\Facades\Log',
        'Request' => 'Octopod\Octophp\Facades\Request',
        'Response' => 'Octopod\Octophp\Facades\Response',
        'Config' => 'Octopod\Octophp\Facades\Config',
        'Template' => 'Octopod\Octophp\Facades\Template',
        'View' => 'Octopod\Octophp\Facades\View',
        'Octopod' => 'Octopod\Octophp\Octopod',
    ),

    'logTypes' => array(
    'xmlStructureError' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_TEXT),
    'sqlError' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'extResourceError' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'initError' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'xsdValidationWarning' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'sqlWarning' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'extResource' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'userLog' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALERT | OCTOLOG_MAIL),
    'serverRequest' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'viewRequest' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'init' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'unknown' => array ("debug" => OCTOLOG_ALL ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),
    'system' => array ("debug" => OCTOLOG_ALL  ^ OCTOLOG_MAIL, "release" =>  OCTOLOG_ALL),

),

);