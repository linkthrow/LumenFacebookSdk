<?php namespace LinkThrow\LumenFacebookSdk;

use Illuminate\Support\ServiceProvider;

class LumenFacebookSdkServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/lumen-facebook-sdk.php' => config_path('lumen-facebook-sdk.php'),
        ], 'config');
    }

    /**
     * Register the service providers.
     *
     * @return void
     */
    public function register()
    {
        // Main Service
        $this->app->bind('LinkThrow\LumenFacebookSdk\LumenFacebookSdk', function ($app) {
            $config = $app['config']->get('lumen-facebook-sdk.facebook_config');

            if (! isset($config['url_detection_handler'])) {
                $config['url_detection_handler'] = new LumenUrlDetectionHandler($app['url']);
            }

            return new LumenFacebookSdk($app['config'], $app['url'], $config);
        });
    }
}
