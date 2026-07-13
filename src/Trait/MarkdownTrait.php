<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait MarkdownTrait
{
    public function changelogMdFile(): string
    {
        return $this->path('CHANGELOG.md');
    }

    public function codeOfConductMdFile(): string
    {
        return $this->path('CODE_OF_CONDUCT.md');
    }

    public function contributingMdFile(): string
    {
        return $this->path('CONTRIBUTING.md');
    }

    public function licenseFile(): string
    {
        return $this->path('LICENSE');
    }

    public function readmeMdFile(): string
    {
        return $this->path('README.md');
    }

    public function securityMdFile(): string
    {
        return $this->path('SECURITY.md');
    }
}
