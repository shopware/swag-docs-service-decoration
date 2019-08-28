<?php declare(strict_types=1);

namespace Swag\ServiceDecoration\Service;

class ServiceDecorator implements MyServiceInterface
{
    /**
     * The original service which could be used in the decorator
     *
     * @var MyServiceInterface
     */
    private $decoratedService;

    public function __construct(MyServiceInterface $myService)
    {
        $this->decoratedService = $myService;
    }

    public function doSomething(): string
    {
        $originalResult = $this->decoratedService->doSomething();

        return $originalResult . ' Did something additionally.';
    }
}
