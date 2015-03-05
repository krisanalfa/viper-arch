<?php

use Norm\Schema\String;
use Norm\Schema\Integer;
use Norm\Schema\Reference;
use Norm\Schema\Text;

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
        'notes' => Text::create('notes')->filter('trim'),
    ),
);
