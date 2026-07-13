<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use Ghostwriter\Root\AbstractRootDirectory;
use Ghostwriter\Root\Exception\ShouldNotHappenException;
use Ghostwriter\Root\Interface\RootDirectoryInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use Throwable;

#[CoversClass(AbstractRootDirectory::class)]
final class AbstractRootDirectoryTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testCoversClass(): void
    {
        self::assertInstanceOf(RootDirectoryInterface::class, new readonly class(__DIR__) extends AbstractRootDirectory {});
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterRootInterfaceRootDirectoryInterface(): void
    {
        self::assertClassImplementsInterface(AbstractRootDirectory::class, RootDirectoryInterface::class);
    }

    /** @throws Throwable */
    public function testThrows(): void
    {
        $this->expectException(ShouldNotHappenException::class);

        self::assertInstanceOf(RootDirectoryInterface::class, new readonly class(__FILE__) extends AbstractRootDirectory {});
    }
}
