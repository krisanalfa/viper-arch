<?php

use KrisanAlfa\Theme\Schema\String;
use KrisanAlfa\Theme\Schema\Integer;
use KrisanAlfa\Theme\Schema\Reference;

return array(
    // Source structure
    'schema' => array(
        'name'  => String::create('name')->filter('trim|required'),
        'stock' => Integer::create('stock')->filter('trim|required'),
        'owner' => Reference::create('owner')->to('User', function ($model) {
            return implode(' ', array(
                $model->get('first_name'),
                $model->get('middle_name'),
                $model->get('last_name'),
            ));
        })->filter('trim'),
        'notes' => String::create('notes')->filter('trim'),
    ),
);
