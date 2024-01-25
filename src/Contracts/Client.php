<?php

namespace Savvy\Laravel\Contracts;

use Savvy\Settings\Request\Entities\Context\Context;

interface Client {
    public function all(Context $context = null, array $defaults) : array;
    public function setting(Context $context = null, string $key, string $type, string|bool|float|int $defaultValue) : \Savvy\Settings\Response\Entities\Setting;
}
