<?php

// BONO
return array(
    // The providers
    'bono.providers' => array(
        // The Norm Provider
        'Norm\\Provider\\NormProvider',

        // Kraken Provider
        'KrisanAlfa\\Kraken\\Provider\\KrakenProvider',

        // Facade Provider, also good for bind some dependencies in Resource Sharer Container
        'KrisanAlfa\\Kraken\\Provider\\FacadesProvider' => array(
            // The dependencies that will be bind to Kraken Container
            'dependencies' => array(
                // 'NoopInterface' => 'NoopClass'
            ),
        ),
    ),
);
