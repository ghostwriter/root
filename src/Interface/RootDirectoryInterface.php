<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Interface;

interface RootDirectoryInterface
{
    public function path(string ...$segments): string;

    public function toString(): string;
}
