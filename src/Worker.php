<?php

declare(strict_types=1);

namespace Mammatus\Queue\Contracts;

use Interop\Queue\Message;

interface Worker
{
    public function perform(Message $message): void;
}
