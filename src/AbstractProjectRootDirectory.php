<?php

declare(strict_types=1);

namespace Ghostwriter\Root;

use Ghostwriter\Root\Interface\ProjectRootDirectoryInterface;
use Ghostwriter\Root\Trait\ComposerTrait;
use Ghostwriter\Root\Trait\ConfigurationTrait;
use Ghostwriter\Root\Trait\DockerTrait;
use Ghostwriter\Root\Trait\DotenvTrait;
use Ghostwriter\Root\Trait\GitHubTrait;
use Ghostwriter\Root\Trait\GitTrait;
use Ghostwriter\Root\Trait\MarkdownTrait;
use Ghostwriter\Root\Trait\NpmTrait;
use Ghostwriter\Root\Trait\PathsTrait;
use Ghostwriter\Root\Trait\PhiveTrait;
use Ghostwriter\Root\Trait\PHPUnitTrait;
use Ghostwriter\Root\Trait\PsalmTrait;
use Ghostwriter\Root\Trait\VercelTrait;

abstract readonly class AbstractProjectRootDirectory extends AbstractRootDirectory implements ProjectRootDirectoryInterface
{
    use ComposerTrait;
    use ConfigurationTrait;
    use DockerTrait;
    use DotenvTrait;
    use GitHubTrait;
    use GitTrait;
    use MarkdownTrait;
    use NpmTrait;
    use PathsTrait;
    use PhiveTrait;
    use PHPUnitTrait;
    use PsalmTrait;
    use VercelTrait;
}
