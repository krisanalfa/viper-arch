<?php

$cfg  = array();
$path = __DIR__ . DIRECTORY_SEPARATOR . 'chunks';
// $manifest = __DIR__ . DIRECTORY_SEPARATOR . 'manifest.json';

// if (file_exists($manifest)) {
//     return json_decode(file_get_contents($manifest), true);
// }

if ($handle = opendir($path)) {
    while (false !== ($entry = readdir($handle))) {
        if (! in_array($entry, array('.', '..'))) {
            if (is_readable($pathToFile = $path . DIRECTORY_SEPARATOR . $entry)) {
                if (is_array($content = require_once $pathToFile)) { $cfg = array_merge_recursive($cfg, $content); }
            }
        }
    }

    closedir($handle);
}

// if (! file_exists($manifest)) {
//     file_put_contents($manifest, json_encode($cfg));

//     return $cfg;
// }

return $cfg;
