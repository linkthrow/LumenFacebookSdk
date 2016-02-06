<?php namespace LinkThrow\LumenFacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LinkThrow\LumenFacebookSdk\LumenFacebookSdk
 */
class FacebookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LinkThrow\LumenFacebookSdk\LumenFacebookSdk';
    }
}
