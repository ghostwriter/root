<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait DotenvTrait
{
    public function dotEditorConfigFile(): string
    {
        return $this->path('.editorconfig');
    }

    public function dotEnvDistFile(): string
    {
        return $this->path('.env.dist');
    }

    public function dotEnvExampleFile(): string
    {
        return $this->path('.env.example');
    }

    public function dotEnvFile(): string
    {
        return $this->path('.env');
    }

    public function dotEnvVaultFile(): string
    {
        return $this->path('.env.vault');
    }

    public function dotEnvrcFile(): string
    {
        return $this->path('.envrc');
    }
}
