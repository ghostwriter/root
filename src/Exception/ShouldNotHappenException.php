<?php

declare(strict_types=1);

namespace Ghostwriter\Root\Exception;

use Ghostwriter\Root\Interface\RootDirectoryExceptionInterface;
use LogicException;

final class ShouldNotHappenException extends LogicException implements RootDirectoryExceptionInterface {}
