<?php

declare(strict_types=1);

namespace Mammatus\Queue\Contracts;

interface Worker
{
    public function perform(): void;
}
