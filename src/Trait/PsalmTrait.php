<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait PsalmTrait
{
    public function psalmBaselineXmlFile(): string
    {
        return $this->path('psalm-baseline.xml');
    }

    public function psalmXmlDistFile(): string
    {
        return $this->path('psalm.xml.dist');
    }

    public function psalmXmlFile(): string
    {
        return $this->path('psalm.xml');
    }
}
