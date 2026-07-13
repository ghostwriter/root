<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait PathsTrait
{
    public function appPath(string ...$segments): string
    {
        return $this->path('app', ...$segments);
    }

    public function configPath(string ...$segments): string
    {
        return $this->path('config', ...$segments);
    }

    public function databasePath(string ...$segments): string
    {
        return $this->path('database', ...$segments);
    }

    public function dotGitHubPath(string ...$segments): string
    {
        return $this->path('.github', ...$segments);
    }

    public function publicPath(string ...$segments): string
    {
        return $this->path('public', ...$segments);
    }

    public function resourcesPath(string ...$segments): string
    {
        return $this->path('resources', ...$segments);
    }

    public function srcPath(string ...$segments): string
    {
        return $this->path('src', ...$segments);
    }

    public function storagePath(string ...$segments): string
    {
        return $this->path('storage', ...$segments);
    }

    public function templatesPath(string ...$segments): string
    {
        return $this->path('templates', ...$segments);
    }

    public function testsPath(string ...$segments): string
    {
        return $this->path('tests', ...$segments);
    }

    public function vendorPath(string ...$segments): string
    {
        return $this->path('vendor', ...$segments);
    }
}
