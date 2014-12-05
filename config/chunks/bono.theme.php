<?php

// BONO
return array(
    // Bono Themeing
    'bono.theme' => array(
        // The class of your theme, basically it register the template and copy all of it's assets (js, css, etc) to your project
        'class' => 'KrisanAlfa\\Theme\\BladeFoundation',

        // Make it overidable, means everytime you change the assets in your dependency folder, it will be copied again
        'overwrite' => true,
    ),
);
