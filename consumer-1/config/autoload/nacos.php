<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    // nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
    // 'url' => '',
    // The nacos host info
    'host' => '114.132.184.216',
    'port' => 8849,
    // The nacos account info
    'username' => 'nacos',
    'password' => 'nacos',
    'guzzle' => [
        'config' => null,
    ],
];
