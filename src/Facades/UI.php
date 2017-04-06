<?php

namespace PrakashDivy\Laravel\OAuth2\UI\Facades;

use Illuminate\Support\Facades\Facade;
use PrakashDivy\OAuth2\Client\Provider\UI as LeagueUI;

class UI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return LeagueUI::class;
    }
}
