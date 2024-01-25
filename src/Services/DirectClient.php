<?php

namespace Savvy\Laravel\Services;

use Savvy\Settings\Request\Entities\Context\Context;
use Savvy\Laravel\Contracts\Client;

class DirectClient implements Client {

    private $client;

    public function __construct(\Savvy\Client $client)
    {
        $this->client = $client;
    }

    public function all(Context $context = null, array $defaults) : array {
        try {
            return $this->client->all($context, $defaults);
        } catch (\RuntimeException $e) {
            report($e);
        }
    }

    public function setting(Context $context = null, string $key, string $type, string|bool|float|int $defaultValue) : \Savvy\Settings\Response\Entities\Setting {
        try {
            return $this->client->setting($context, $key, $type, $defaultValue);
        } catch (\RuntimeException $e) {
            report($e);
        }
    }
}
