<?php

namespace PrakashDivy\Laravel\OAuth2\UI;

use Illuminate\Support\ServiceProvider;
use Q5Studio\OAuth2\Client\Provider\UI as LeagueUI;

class UIServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/ui.php' => config_path('ui.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind(LeagueUI::class, function ($app) {
            return new LeagueUI([
                'clientId' => config('ui.clientId'),
                'clientSecret' => config('ui.clientSecret'),
                'redirectUri' => config('ui.redirectUri'),
            ]);
        });
    }

    public function provides()
    {
        return [
            LeagueUI::class
        ];
    }
}
