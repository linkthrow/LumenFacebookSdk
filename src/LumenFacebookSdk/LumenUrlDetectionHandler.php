<?php namespace LinkThrow\LumenFacebookSdk;

use Laravel\Lumen\Routing\UrlGenerator;
use Facebook\Url\UrlDetectionInterface;

class LumenUrlDetectionHandler implements UrlDetectionInterface
{
    /**
     * @var UrlGenerator
     */
    private $url;

    /**
     * @param UrlGenerator $url
     */
    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }

    /**
     * @inheritdoc
     */
    public function getCurrentUrl()
    {
        return $this->url->current();
    }
}
