<?php declare(strict_types=1);

namespace ServiceDecoration\Service;

class DecoratedService
{
    /**
     * @var MyService
     */
    private $coreService;

    public function __construct(MyService $myService)
    {
        $this->coreService = $myService;
    }
}
