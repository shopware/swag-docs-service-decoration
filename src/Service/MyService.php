<?php declare(strict_types = 1);

namespace Swag\ServiceDecoration\Service;

class MyService implements MyServiceInterface
{
    public function doSomething(): string
    {
        return 'Did something.';
    }
}
