<?php

declare(strict_types=1);

namespace Ghostwriter\Root;

use Ghostwriter\Root\Exception\ShouldNotHappenException;
use Ghostwriter\Root\Interface\RootDirectoryInterface;
use Override;

use const DIRECTORY_SEPARATOR;

use function implode;
use function is_dir;
use function mb_rtrim;
use function sprintf;

abstract readonly class AbstractRootDirectory implements RootDirectoryInterface
{
    public function __construct(
        public string $path,
    ) {
        if (! is_dir($path)) {
            throw new ShouldNotHappenException(sprintf(
                'The path "%s" is not a directory.',
                $path
            ));
        }
    }

    public static function new(string $path): static
    {
        return new static(mb_rtrim($path, DIRECTORY_SEPARATOR));
    }

    #[Override]
    public function path(string ...$segments): string
    {
        return implode(DIRECTORY_SEPARATOR, [$this->path, ...$segments]);
    }

    #[Override]
    public function toString(): string
    {
        return $this->path;
    }
}
