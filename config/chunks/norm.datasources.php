<?php

// Database connection configuration
return array(
    'norm.datasources' => array(
        // Use flat file
        'flat' => array(
            // Driver for MongoDB
            'driver'   => 'Norm\\Connection\\FlatFileConnection',

            // Database in MongoDB to store your datas
            'database' => 'bono',
        ),
    ),
);
