<?php

// BONO
return array(
    // The Middlewares
    'bono.middlewares' => array(
        '\\KrisanAlfa\\Theme\\BladeFoundation\\Middleware\\NotificationMiddleware',
        '\\Bono\\Middleware\\SessionMiddleware',
        '\\KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',
        '\\Bono\\Middleware\\ContentNegotiatorMiddleware',
    ),
);
