<?php
namespace Muffin\Pusher\Webservice\Driver;

use Github\Client;
use Github\HttpClient\CachedHttpClient;
use Muffin\Github\Webservice\Driver\Github\CacheBridge;
use Muffin\Webservice\AbstractDriver;

class Pusher extends AbstractDriver
{
    public $_defaultConfig = [
        'options' => [
            'encrypted' => true,
        ],
    ];

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function initialize()
    {
        $this->_client = new \Pusher(
            $this->config('appKey'),
            $this->config('appSecret'),
            $this->config('appId'),
            $this->config('options')
        );
    }
}
