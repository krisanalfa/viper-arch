<?php

return array(
    // User using hashing for password, so we need an observer
    'observers' => array(
        'Norm\\Observer\\Hashed' => array()
    ),
    // Source structure
    'schema' => array(
        'username'    => schema('string', 'username')->filter('trim|required|unique:User,username'),
        'email'       => schema('string', 'email')->filter('trim|required|unique:User,email'),
        'first_name'  => schema('string', 'first_name')->filter('trim|required'),
        'middle_name' => schema('string', 'middle_name')->filter('trim'),
        'last_name'   => schema('string', 'last_name')->filter('trim|required'),
        'birth_place' => schema('string', 'birth_place')->filter('trim'),
        'birth_date'  => schema('date', 'birth_date')->filter('trim|required'),
        'password'    => schema('password', 'password')->filter('trim|required|confirmed'),
    ),
);
