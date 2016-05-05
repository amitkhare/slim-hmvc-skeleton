<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        // db settings
        'db' => [
            'hostname' => "localhost",
            'username' => "inkimagi_moneypl",
            'password' => "moneyplant",
            'dbname'   => "inkimagi_moneyplant"
        ],

        'hmvc' => [
            'modulePath' => APPPATH . 'modules'.DIRECTORY_SEPARATOR,
        ],
    ],
];