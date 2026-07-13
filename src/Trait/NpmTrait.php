<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait NpmTrait
{
    public function packageJsonFile(): string
    {
        return $this->path('package.json');
    }

    public function packageLockJsonFile(): string
    {
        return $this->path('package-lock.json');
    }
}
