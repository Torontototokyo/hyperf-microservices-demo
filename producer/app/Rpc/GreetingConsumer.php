<?php

namespace App\Rpc;

use Hyperf\RpcClient\AbstractServiceClient;
use Nacos\Grpc\GreetingInterface;

class GreetingConsumer extends AbstractServiceClient implements GreetingInterface
{
    protected $serviceName = 'GreetingService';


    public function sayHello()
    {
        // TODO: Implement sayHello() method.
        return $this->__request(__FUNCTION__, []);
    }

    public function sayGoodbye()
    {
        // TODO: Implement sayGoodbye() method.
    }

    public function say(string $words)
    {
        // TODO: Implement say() method.
    }


}