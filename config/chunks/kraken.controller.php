<?php

// BONO
return array(
    // Application Controller using Kraken Container
    'kraken.controller' => array(
        'default' => 'KrisanAlfa\\Kraken\\Controller\\NormController',
        'mapping' => array(
            '/user'  => null,
        ),
    ),
);
