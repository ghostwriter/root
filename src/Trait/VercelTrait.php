<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait VercelTrait
{
    public function vercelIgnoreFile(): string
    {
        return $this->path('.vercelignore');
    }

    public function vercelJsonFile(): string
    {
        return $this->path('vercel.json');
    }
}
