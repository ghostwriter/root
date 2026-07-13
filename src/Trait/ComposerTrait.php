<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait ComposerTrait
{
    public function autoloadFile(): string
    {
        return $this->vendorPath('autoload.php');
    }

    public function composerJsonFile(): string
    {
        return $this->path('composer.json');
    }

    public function composerLockFile(): string
    {
        return $this->path('composer.lock');
    }

    public function installedJsonFile(): string
    {
        return $this->vendorPath('composer', 'installed.json');
    }
}
