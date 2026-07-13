<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait ConfigurationTrait
{
    public function leaguePlatesFile(): string
    {
        return $this->configPath('league', 'plates.php');
    }

    public function middlewaresFile(): string
    {
        return $this->configPath('middlewares.php');
    }

    public function routesFile(): string
    {
        return $this->configPath('routes.php');
    }

    public function templatesFile(): string
    {
        return $this->configPath('templates.php');
    }

    public function tsconfigJsonFile(): string
    {
        return $this->path('tsconfig.json');
    }
}
