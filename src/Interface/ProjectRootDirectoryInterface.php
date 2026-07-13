<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Interface;

interface ProjectRootDirectoryInterface extends RootDirectoryInterface
{
    public function appPath(string ...$segments): string;

    public function configPath(string ...$segments): string;

    public function databasePath(string ...$segments): string;

    public function dotGitHubPath(string ...$segments): string;

    public function publicPath(string ...$segments): string;

    public function resourcesPath(string ...$segments): string;

    public function srcPath(string ...$segments): string;

    public function storagePath(string ...$segments): string;

    public function templatesPath(string ...$segments): string;

    public function testsPath(string ...$segments): string;
}
