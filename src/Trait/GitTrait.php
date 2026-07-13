<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait GitTrait
{
    public function gitAttributesFile(): string
    {
        return $this->path('.gitattributes');
    }

    public function gitDirectory(): string
    {
        return $this->path('.git');
    }

    public function gitIgnoreFile(): string
    {
        return $this->path('.gitignore');
    }
}
