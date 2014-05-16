<?php

use Norm\Schema\String;
use Norm\Schema\Password;

return array(
    // User using hashing for password, so we need an observer
    'observers' => array(
        '\\Norm\\Observer\\Hashed' => array()
    ),
    // Hidden attributes
    'hidden' => array('password'),
    // Source structure
    'schema' => array(
        'username'    => String::getInstance('username')->filter('trim|required|unique:User,username'),
        'email'       => String::getInstance('email')->filter('trim|required|unique:User,email'),
        'first_name'  => String::getInstance('first_name')->filter('trim|required'),
        'middle_name' => String::getInstance('middle_name')->filter('trim'),
        'last_name'   => String::getInstance('last_name')->filter('trim|required'),
        'twitter'     => String::getInstance('twitter')->filter('trim|required'),
        'password'    => Password::getInstance('password')->filter('trim|required|confirmed'),
    ),
);
