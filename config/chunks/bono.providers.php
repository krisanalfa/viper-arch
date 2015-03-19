<?php

// BONO
return array(
    // The providers
    'bono.providers' => array(
        // The version provider
        'BComp\\Provider\\VersionProvider' => array(
            // Enter the team hostnames computer here
            'local' => array(

            ),

            // Enter the remote hostnames computer here
            'remote' => array(

            ),
        ),

        // For logging purpose
        'BComp\\Provider\\LogProvider' => array(
            // Your log name
            'log.name' => 'ViperLog',

            // Path where log will be written
            'log.path' => 'logs',

            // The file format of logfile
            'log.format' => 'Y-m-d',

            // The used timezone for your logfile timestamp
            'log.timezone' => 'Asia/Jakarta'
        ),

        // The Norm Provider
        'Norm\\Provider\\NormProvider',

        // Kraken Provider
        'KrisanAlfa\\Kraken\\Provider\\KrakenProvider',

        // Facade Provider, also good for bind some dependencies in Resource Sharer Container
        'KrisanAlfa\\Kraken\\Provider\\FacadesProvider' => array(
            // The dependencies that will be bind to Kraken Container
            'dependencies' => array(
                'kraken' => 'KrisanAlfa\\Kraken\\Kraken',
            ),
        ),

        // Norm Schema Mapper
        // Use it with:
        //     schema('keyRegisteredBelow', 'name', 'label')
        'BComp\\Provider\\SchemaMapper' => array(
            'boolean'        => 'Norm\\Schema\\Boolean',
            'date'           => 'Norm\\Schema\\Date',
            'dateTime'       => 'Norm\\Schema\\DateTime',
            'file'           => 'Norm\\Schema\\File',
            'float'          => 'Norm\\Schema\\Float',
            'integer'        => 'Norm\\Schema\\Integer',
            'normArray'      => 'Norm\\Schema\\NormArray',
            'object'         => 'Norm\\Schema\\Object',
            'password'       => 'Norm\\Schema\\Password',
            'reference'      => 'Norm\\Schema\\Reference',
            'referenceArray' => 'Norm\\Schema\\ReferenceArray',
            'string'         => 'Norm\\Schema\\String',
            'text'           => 'Norm\\Schema\\Text',
            'token'          => 'Norm\\Schema\\Token',
            'unsafeString'   => 'Norm\\Schema\\UnsafeString',
            'unsafeText'     => 'Norm\\Schema\\UnsafeText',
        ),

        // The Auth Provider
        // 'App\\Provider\\Auth' => array(
        //     'allowed' => array(
        //         // '/about'      => function() {},
        //         // '/disclaimer' => function() {},
        //     ),
        // ),

        // The Debugger Tools
        'App\\Provider\\DebugBar' => array(
        ),
    ),
);
