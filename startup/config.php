<?php
require_once 'vendor/autoload.php';

define('APP_NAME', 'GEstufas');
define('INVALID_ACCESS_ROUTE', 'c=auth&a=index');

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/pws',
        )
    );
});