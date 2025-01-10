<?php

declare(strict_types=1);

namespace Mammatus\Queue\Contracts;

interface Encoder
{
    /** @param array<string, mixed> $payload */
    public function encode(array $payload): string;

    /** @return array<string, mixed> */
    public function decode(string $payload): array;
}
