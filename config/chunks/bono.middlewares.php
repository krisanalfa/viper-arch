<?php

// BONO
return array(
    // The Middlewares
    'bono.middlewares' => array(
        '\\KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',
        '\\Bono\\Middleware\\SessionMiddleware',
        '\\KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',
        '\\Bono\\Middleware\\ContentNegotiatorMiddleware',
    ),
);
