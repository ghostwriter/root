<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use Ghostwriter\Root\AbstractProjectRootDirectory;
use Ghostwriter\Root\AbstractRootDirectory;
use Ghostwriter\Root\Exception\ShouldNotHappenException;
use Ghostwriter\Root\Interface\ProjectRootDirectoryInterface;
use Ghostwriter\Root\Interface\RootDirectoryInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversClassesThatExtendClass;
use Throwable;

#[CoversClass(AbstractProjectRootDirectory::class)]
#[CoversClassesThatExtendClass(AbstractRootDirectory::class)]
final class AbstractProjectRootDirectoryTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testCoversClass(): void
    {
        self::assertInstanceOf(ProjectRootDirectoryInterface::class, new readonly class(__DIR__) extends AbstractProjectRootDirectory {});
    }

    /** @throws Throwable */
    public function testExtendsGhostwriterRootAbstractRootDirectory(): void
    {
        self::assertClassExtendsClass(AbstractProjectRootDirectory::class, AbstractRootDirectory::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterRootInterfaceProjectRootDirectoryInterface(): void
    {
        self::assertClassImplementsInterface(AbstractProjectRootDirectory::class, ProjectRootDirectoryInterface::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterRootInterfaceRootDirectoryInterface(): void
    {
        self::assertClassImplementsInterface(AbstractProjectRootDirectory::class, RootDirectoryInterface::class);
    }

    /** @throws Throwable */
    public function testThrows(): void
    {
        $this->expectException(ShouldNotHappenException::class);

        self::assertInstanceOf(ProjectRootDirectoryInterface::class, new readonly class(__FILE__) extends AbstractProjectRootDirectory {});
    }
}
