<?php

namespace Mosdef\Helpers\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('icon', function ($expression) {
            return "<?php echo icon({$expression}); ?>";
        });

        $this->publishTemplateAssets();
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function publishTemplateAssets()
    {
        $this->publishes([
            dirname(dirname(__DIR__)) . '/resources/views/elements/icon.blade.php'
                => resource_path('views/elements/icon.blade.php'),
        ], 'icon-assets');
    }

}
