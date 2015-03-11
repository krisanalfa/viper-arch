<?php namespace App\Provider;

use DebugBar\StandardDebugBar;
use DebugBar\DataCollector\ConfigCollector;
use Bono\Provider\Provider;
use URL;

class DebugBar extends Provider
{
    public function initialize()
    {
        $app = $this->app;

        $resourcesPath = $app->config('app.path').'/vendor/maximebf/debugbar/src/DebugBar/Resources';
        $target        = $app->config('app.path').'/www/vendor/debugbar';

        if (! is_dir($target)) {
            mkdir($target);

            $app->theme->copy($resourcesPath, $target);
            $app->theme->copy($resourcesPath.'/vendor/font-awesome/fonts/fontawesome-webfont.woff', $target.'/vendor/font-awesome/fonts/fontawesome-webfont.woff2');
        }

        $debugBar = new StandardDebugBar();

        $debugBar->addCollector(new ConfigCollector($app->settings));

        app_register('debugbar', function() use ($debugBar) {
            return $debugBar;
        });

        app_register('debugbar.renderer', function() use ($debugBar) {

            $renderer = $debugBar->getJavascriptRenderer();

            $renderer->setBaseUrl(URL::base('/vendor/debugbar'));

            return $renderer;
        });

        register_shutdown_function(function() {
            app_resolve('debugbar')['time']->stopMeasure('boot');
        });
    }
}
