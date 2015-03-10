<?php

use Bono\App;

// Provide the list of menu in your Navbar
return array(
    // The title in your navbar
    'navbar.title' => 'App – '.ucfirst(App::getInstance()->config('mode')),

    // The menus in your navbar
    'navbar.menus' => array(
        array(
            // What shown in the navbar
            'title'    => 'Master Data',

            // The icon for your navbar menu
            'icon'     => '<i class="xn xn-database"></i>',

            // Dropdown menu
            'children' => array(
                // 1st child
                array(
                    // What shown in the navbar
                    'title' => 'User',

                    // URL for this menu
                    'uri'   => '/user',

                    // The icon for your navbar menu
                    'icon'  => '<i class="xn xn-user"></i>'
                ),
            ),
        ),
    ),
);
