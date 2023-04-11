<?php

namespace PhpMiddleware\RequestId\Generator;

use Ramsey\Uuid\UuidFactoryInterface;

final class RamseyUuid5Generator implements GeneratorInterface
{
    private $ns;
    private $name;
    private $factory;

    public function __construct(UuidFactoryInterface $factory, string $ns, string $name)
    {
        $this->factory = $factory;
        $this->ns = $ns;
        $this->name = $name;
    }

    public function generateRequestId(): string
    {
        return $this->factory->uuid5($this->ns, $this->name)->toString();
    }
}
