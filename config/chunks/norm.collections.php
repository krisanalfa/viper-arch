<?php

return array(
    'norm.collections' => array(
        'default' => array(
            'observers' => array(
                'Norm\\Observer\\Ownership',
                'Norm\\Observer\\Timestampable',
            ),
            'limit' => 10,
        ),
        'resolvers' => array(
            'Norm\\Resolver\\CollectionResolver',
        ),
    ),
);
