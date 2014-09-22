<?php

// BONO
return array(
    // The Middlewares
    'bono.middlewares' => array(
        'Bono\\Middleware\\StaticPageMiddleware',
        'Bono\\Middleware\\ContentNegotiatorMiddleware',
        'KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',
        'KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',
        'Bono\\Middleware\\SessionMiddleware',
    ),
);
