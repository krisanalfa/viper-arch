<?php

return array(
    'norm.collections' => array(
        'default' => array(
            'observers' => array(
                '\\Norm\\Observer\\Ownership' => array(),
                '\\Norm\\Observer\\Timestampable' => array(),
            ),
        ),
        'resolvers' => array(
            '\\Norm\\Resolver\\CollectionResolver' => array(
                'collections.path' => 'chunks/collections'
            )
        )
    ),
);
