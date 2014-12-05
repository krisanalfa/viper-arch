<?php

$cfg  = array();
$path = __DIR__ . DIRECTORY_SEPARATOR . 'chunks';

if ($handle = opendir($path)) {
    while (false !== ($entry = readdir($handle))) {
        $pathToFile = $path . DIRECTORY_SEPARATOR . $entry;

        if (is_readable($pathToFile)) {
            $content = require_once $pathToFile;

            if (is_array($content)) {
                $cfg = array_merge_recursive($cfg, $content);
            }
        }
    }

    closedir($handle);
}

return $cfg;
