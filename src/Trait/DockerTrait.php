<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait DockerTrait
{
    public function composeYmlFile(): string
    {
        return $this->path('compose.yml');
    }

    public function dockerFile(): string
    {
        return $this->path('Dockerfile');
    }
}
