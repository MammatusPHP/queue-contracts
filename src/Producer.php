<?php

declare(strict_types=1);

namespace Mammatus\Queue\Contracts;

use Interop\Queue\Producer as InteropProducer;
use Mammatus\Queue\Contracts\Work;
use Mammatus\Queue\Generated\Hydrator;
use Mammatus\Queue\Generated\WorkQueueMap;

use Mammatus\Queue\Message;
use Mammatus\Queue\Queue;
use function json_encode;

interface Producer
{
    public function send(Work $work): void;
}
