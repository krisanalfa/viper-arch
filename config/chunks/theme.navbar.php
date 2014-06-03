<?php

return array(
    'navbar.title' => 'Bono <br /> PHP Framework',
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
                array(
                    'title' => 'Disclaimer',
                    'uri'   => '/disclaimer',
                    'icon'  => '<i class="fa fa-info"></i>'
                ),
            ),
            'icon'     => '<i class="fa fa-bars"></i>',
        ),
    ),
);
