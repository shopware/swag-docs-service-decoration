<?php declare(strict_types=1);

namespace Swag\ServiceDecoration\Service;

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
