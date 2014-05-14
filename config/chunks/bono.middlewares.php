<?php

// BONO
return array(
    // The Middlewares
    'bono.middlewares' => array(
        '\\Bono\\Middleware\\ContentNegotiatorMiddleware',
        '\\Bono\\Middleware\\ControllerMiddleware',
        '\\Bono\\Middleware\\NotificationMiddleware',
        '\\Bono\\Middleware\\SessionMiddleware',
    ),
);
