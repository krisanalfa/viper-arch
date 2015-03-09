<?php

return array(
    // Source structure
    'schema' => array(
        'name'  => schema('string', 'name')->filter('trim|required'),
        'stock' => schema('integer', 'stock')->filter('trim|required'),
        'owner' => schema('reference', 'owner')->to('User', function ($model) {
            return implode(' ', array(
                $model->get('first_name'),
                $model->get('middle_name'),
                $model->get('last_name'),
            ));
        })->filter('trim'),
        'notes' => schema('text', 'notes')->filter('trim'),
    ),
);
