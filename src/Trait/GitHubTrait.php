<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Trait;

trait GitHubTrait
{
    public function actionYmlFile(): string
    {
        return $this->path('action.yml');
    }

    public function codeownersFile(): string
    {
        return $this->dotGitHubPath('CODEOWNERS');
    }

    public function dependabotYmlFile(): string
    {
        return $this->dotGitHubPath('dependabot.yml');
    }

    public function fundingYmlFile(): string
    {
        return $this->dotGitHubPath('FUNDING.yml');
    }

    public function settingsYmlFile(): string
    {
        return $this->dotGitHubPath('settings.yml');
    }

    public function workflowYmlFile(string $workflow): string
    {
        return $this->dotGitHubPath('workflows', $workflow . '.yml');
    }
}
