<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait PHPUnitTrait
{
    public function phpunitXmlDistFile(): string
    {
        return $this->path('phpunit.xml.dist');
    }

    public function phpunitXmlFile(): string
    {
        return $this->path('phpunit.xml');
    }
}
