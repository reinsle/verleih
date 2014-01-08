<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Console Application',

    // preloading 'log' component
    'preload' => array('log'),

    // application components
    'components' => array(
        'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/verleih.db',
        ),
        // uncomment the following to use a MySQL database
        /*
        'db' => array(
            'connectionString' => 'pgsql:host=10.4.3.30;dbname=verleih',
            'emulatePrepare' => true,
            'username' => 'verleih',
            'password' => 'ni.xd.ol',
            'charset' => 'utf8',
        ),
        */
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),
);