<?php

declare(strict_types=1);

namespace Mammatus\Queue\Contracts;

/** @api */
interface Producer
{
    public function send(Work $work): void;
}
