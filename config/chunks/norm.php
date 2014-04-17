<?php

use \Norm\Schema\String;
use \Norm\Schema\Password;

// NORM
return array(
    // The database
    'norm.databases' => array(
        'mongo' => array(
            'driver' => '\\Norm\\Connection\\MongoConnection',
            'database' => 'bono',
        ),
    ),

    // Collections of database
    'norm.collections' => array(
        'mapping' => array(
            'User' => array(
                // User using hashing for password, so we need an observer
                'observers' => array(
                    '\\Norm\\Observer\\Hashed' => array(
                        'fields'  => array('password'),
                        'algo'    => PASSWORD_BCRYPT,
                        // You may change the cost to improve hashing method
                        'options' => array('cost' => 12),
                    )
                ),
                // Hidden attributes
                'hidden' => array('password'),
                // Source structure
                'schema' => array(
                    'username'   => String::getInstance('username')->filter('trim|required|unique:User,username'),
                    'email'      => String::getInstance('email')->filter('trim|required|unique:User,email'),
                    'first_name' => String::getInstance('first_name')->filter('trim'),
                    'last_name'  => String::getInstance('last_name')->filter('trim'),
                    'twitter'    => String::getInstance('twitter')->filter('trim'),
                    'password'   => Password::getInstance('password')->filter('trim|required|confirmed'),
                ),
            )
        ),
    ),
);
