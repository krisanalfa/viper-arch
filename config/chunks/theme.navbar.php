<?php

return array(
    'navbar.title' => 'Viper Arch',
    'navbar.menus' => array(
        array(
            'title' => 'Dashboard',
            'uri'   => '/',
            'icon'  => '<i class="fa fa-home"></i>'
        ),
        array(
            'title'    => 'Menu',
            'children' => array(
                array(
                    'title' => 'User',
                    'uri'   => '/user',
                    'icon'  => '<i class="fa fa-user"></i>'
                ),
            ),
            'icon'     => '<i class="fa fa-bars"></i>',
        ),
    ),
);
