<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\Installer\Config\Option\RabbitMq;

use Shlinkio\Shlink\Installer\Util\AskUtilsTrait;
use Symfony\Component\Console\Style\StyleInterface;

class RabbitMqHostConfigOption extends AbstractRabbitMqEnabledConfigOption
{
    use AskUtilsTrait;

    public function getEnvVar(): string
    {
        return 'RABBITMQ_HOST';
    }

    public function ask(StyleInterface $io, array $currentOptions): string
    {
        return $this->askRequired($io, 'RabbitMQ host name');
    }
}
