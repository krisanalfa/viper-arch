<?php

// BONO
return array(
    // The Middlewares
    'bono.middlewares' => array(
        'KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',
        'Bono\\Middleware\\StaticPageMiddleware',
        'Bono\\Middleware\\ContentNegotiatorMiddleware',
        'KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',
        'Bono\\Middleware\\SessionMiddleware',
    ),
);
