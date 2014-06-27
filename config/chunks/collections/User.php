<?php

use KrisanAlfa\Theme\BladeFoundation\Schema\String;
use KrisanAlfa\Theme\BladeFoundation\Schema\Password;

return array(
    // User using hashing for password, so we need an observer
    'observers' => array(
        '\\Norm\\Observer\\Hashed' => array()
    ),
    // Hidden attributes
    'hidden' => array('password'),
    // Source structure
    'schema' => array(
        'username'    => String::create('username')->filter('trim|required|unique:User,username'),
        'email'       => String::create('email')->filter('trim|required|unique:User,email'),
        'first_name'  => String::create('first_name')->filter('trim|required'),
        'middle_name' => String::create('middle_name')->filter('trim'),
        'last_name'   => String::create('last_name')->filter('trim|required'),
        'twitter'     => String::create('twitter')->filter('trim|required'),
        'password'    => Password::create('password')->filter('trim|required|confirmed'),
    ),
);