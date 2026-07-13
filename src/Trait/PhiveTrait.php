<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait PhiveTrait
{
    public function phiveXmlFile(): string
    {
        return $this->path('phive.xml');
    }
}
