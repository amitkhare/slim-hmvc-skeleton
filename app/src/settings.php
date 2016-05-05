<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        // db settings
        'db' => [
            'hostname' => "localhost",
            'username' => "slimtest",
            'password' => "password",
            'dbname'   => "slimtest"
        ],

        'hmvc' => [
            'modulePath' => APPPATH . 'modules'.DIRECTORY_SEPARATOR,
        ],
    ],
];