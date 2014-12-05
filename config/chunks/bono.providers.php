<?php

// BONO
return array(
    // The providers
    'bono.providers' => array(
        'Norm\\Provider\\NormProvider',
        'KrisanAlfa\\Kraken\\Provider\\KrakenProvider',
        'KrisanAlfa\\Kraken\\Provider\\FacadesProvider' => array(
            'dependencies' => array(
                // Noop
            ),
        ),
    ),
);
