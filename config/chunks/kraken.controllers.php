<?php

// BONO
return array(
    // Application Controller using Kraken Container
    'kraken.controllers' => array(
        'default' => 'KrisanAlfa\\Kraken\\Controller\\NormController',
        'mapping' => array(
            '/user'  => null,
        ),
        'dependencies' => array(
        ),
    ),
);
