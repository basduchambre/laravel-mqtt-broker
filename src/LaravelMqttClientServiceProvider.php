<?php

namespace Basduchambre\LaravelMqttClient;

use Illuminate\Support\ServiceProvider;

class LaravelMqttClientServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/mqtt.php' => config_path('mqtt.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('mqtt', function () {
            return new LaravelMqttClient();
        });
    }
}
