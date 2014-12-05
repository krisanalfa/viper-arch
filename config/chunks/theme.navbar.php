<?php

return array(
    'navbar.title' => '<i class="fa fa-cube"></i> Viper Arch',
    'navbar.menus' => array(
        array(
            'title'    => 'Master Data',
            'icon'     => '<i class="fa fa-database"></i>',
            'children' => array(
                array(
                    'title' => 'User',
                    'uri'   => '/user',
                    'icon'  => '<i class="fa fa-user"></i>'
                ),
                array(
                    'title' => 'Material',
                    'uri'   => '/material',
                    'icon'  => '<i class="fa fa-bookmark-o"></i>'
                ),
            ),
        ),
    ),
);
